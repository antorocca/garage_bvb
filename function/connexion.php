<?php
    class Submit{

    public static $erreur = '';
    public static $success = '';
    public static $erreurCo = '';
    public static $successCo = '';
    public static $ban = ''; 

    public static function register(){
        
        $bdd = Database::connect();
        
        if(isset($_POST['submit'])){
            $email = htmlspecialchars($_POST['email']);
            $name = htmlspecialchars($_POST['name']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $phone = htmlspecialchars($_POST['phone']);
            $address = htmlspecialchars($_POST['address']);
            $city = htmlspecialchars($_POST['city']);
            $postal = htmlspecialchars($_POST['postal']);
            $mdp = htmlspecialchars($_POST['mdp']);
            $mdp2 = htmlspecialchars($_POST['mdp2']);          
    
            if(!empty($email) && !empty($mdp) && !empty($mdp2)){//not empty input
                
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){//valid email verification

                    if(!preg_match('/^(.{25,999}.{0,8}|[^0-9]*|[^A-Z]*|[^a-z]*|[a-zA-Z0-9]*)$/', $mdp)) {
                        //obliges uppercase and special charactere

                        if($mdp===$mdp2){//valid corresponding password
                            
                            $select = $bdd->prepare("SELECT * FROM user WHERE email=?");
                            $select->execute([$email]);
        
                            $count = $select->rowcount();
        
                            if($count === 0){//verify that the account do not exist
        
                                $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
                                /*insertion in db*/
                                $insert = $bdd->prepare('INSERT INTO user(name, firstname, email, password, phone, address, city, postal, role) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
                                $insert-> execute([$name, $firstname, $email, $mdphash, $phone, $address, $city, $postal, 'user']);
                                /* call the new user in db*/
                                $stmt = $bdd->prepare('SELECT * FROM user WHERE email=?');
                                $stmt-> execute([$email]);
                                $newUser = $stmt->fetch();
                                /*create session*/
                                if($newUser['email'] == $email){

                                    $_SESSION['id'] = $newUser['id'];

                                header('Location: index.php');

                                static::$success='Bienvenue sur BVB auto';
                                }
        
                            }
                            else{
                                static::$erreur = '*Vous etes d??j?? inscrit veuillez vous connecter !';
                            }
                        }
                        else{
                            static::$erreur="*Les mots de passes ne sont pas identique !";
                        }
                    }/*****/
                    else{
                        static::$erreur="*Le mot de passe doit contenir 8 caract??res dont une majuscule et un caractere sp??cial (#=+&...)";
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

    public static function connexion(){

        $bdd = Database::connect();

        if(isset($_POST['connexion'])){
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['mdp']);
            
            if(!empty($email) && !empty($mdp)){
                
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    
                    $select = $bdd->prepare('SELECT * FROM user WHERE email = ? ');
                    $select-> execute([$email]);
        
                    $result = $select->fetch();

                    if($result !== false){
        
                        $mdpBdd = $result[4];
                        $role = $result['role'];

                        if( password_verify($mdp, $mdpBdd)){

                            $_SESSION['id'] = $result['id'];
                            $_SESSION['role'] = $result['role'];

                            if($role == 'admin') {
                                header('Location: admin.php');
                            } 
                            else{
                                header('Location: index.php');
                            }
                        }
                        else{
                            static::$erreurCo = 'Mot de passe incorrect';
                        }   
                    }
                    else{
                        static::$erreurCo = '*L\'email n\'a pas ??t?? reconnu';
                    }                    
                }
                else{
                    static::$erreurCo='*Veuillez entrez un email valide';
                }
            }
            else{
                static::$erreurCo = '*Veuillez remplir les champs';
            }
        }
    }
}
?>
