<?php
class CrudU{

    public static $erreur = '';
    public static $success = '';
    public static $erreurCo = '';
    public static $successCo = '';
    public static $ban = ''; 

    public static function createUser(){
        
        $bdd = Database::connect();
        
        if(isset($_POST['submit'])){
            $email = htmlspecialchars($_POST['email']);
            $name = htmlspecialchars($_POST['name']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $phone = htmlspecialchars($_POST['phone']);
            $address = htmlspecialchars($_POST['address']);
            $city = htmlspecialchars($_POST['city']);
            $postal = htmlspecialchars($_POST['postal']);
            $role = htmlspecialchars($_POST['role']);
            $mdp = htmlspecialchars($_POST['mdp']);
            $mdp2 = htmlspecialchars($_POST['mdp2']);
            
    
            if(!empty($email) && !empty($mdp) && !empty($mdp2)){
                
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    
                    if($mdp===$mdp2){
                        
                        $select = $bdd->prepare("SELECT * FROM user WHERE email=?");
                        $select->execute([$email]);
    
                        $count = $select->rowcount();
    
                        if($count === 0){
    
                            $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
                            
                            $insert = $bdd->prepare('INSERT INTO user(name, firstname, email, password, phone, address, city, postal, role) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
                            $insert-> execute([$name, $firstname, $email, $mdphash, $phone, $address, $city, $postal, $role]);

                            header('Location: admin.php');
    
                        }
                        else{
                            static::$erreur = '*Cet e-mail existe déjà';
                        }
                    }
                    else{
                        static::$erreur="*Les mots de passes ne sont pas identique";
                    }
                }
                else{
                    static::$erreur="*Veuillez entrer un email valide !";
                }
            }
            else{
                static::$erreur= "*Veuillez remplir les champs !";
            }
        }
    }

    public static function deleteUser(){

        $bdd = Database::connect();
        $id = htmlspecialchars($_GET['id']);

        if(isset($_POST['deleteInput'])){
            $delete = $bdd-> prepare('DELETE FROM user WHERE id= ?');
            $delete-> execute([$id]);
            header("Location: admin.php");
        }
    }

    public static function updateUser(){ 

        $bdd = Database::connect();
        $id = $_GET['id'];

        
        $user = $bdd->prepare('SELECT * FROM user WHERE id = ?');
        $user->execute([$id]);

        $userDetails = $user->fetch();

        if(isset($_POST['sbmUpd'])){
            $updEmail = htmlspecialchars($_POST['updEmail']);
            $updRole = htmlspecialchars($_POST['updRole']);
            $updName = htmlspecialchars($_POST['updName']);
            $updFirstName = htmlspecialchars($_POST['updFirstname']);
            $updAddress = htmlspecialchars($_POST['updAddress']);
            $updPostal = htmlspecialchars($_POST['updPostal']);
            $updPhone = htmlspecialchars($_POST['updPhone']);
            $updCity = htmlspecialchars($_POST['updCity']);


                if(empty($updEmail)){

                    $updEmail = $userDetails['email'];
                }
                if(empty($updName)){
                        
                    $updName = $userDetails['name'];
                }
                if(empty($updFirstName)){
                            
                    $updFirstName = $userDetails['firstname'];
                }               
                if(empty($updPhone)){
                                        
                    $updPhone = $userDetails['phone'];
                }
                if(empty($updAddress)){
                                
                    $updAddress = $userDetails['address'];
                }
                if(empty($updCity)){
                                    
                    $updCity = $userDetails['city'];
                }
                if(empty($updPostal)){
                                        
                    $updPostal = $userDetails['postal'];
                }
                if(empty($updRole)){
                                        
                    $updRole = $userDetails['role'];
                }
            $update = $bdd->prepare('UPDATE user SET email = ?, name = ?, firstname = ?, phone = ?, address = ?, city = ?, postal= ?, role = ? WHERE id= ?');
            $update->execute([$updEmail, $updName, $updFirstName, $updPhone, $updAddress, $updCity, $updPostal, $updRole, $id]);
            header('Location: admin.php');

        }
    }
}

?>