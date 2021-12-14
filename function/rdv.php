<?php
class Rdv{
    public static $erreur = '';
    public static $success = '';

    public static function maintenance(){

        $bdd = Database::connect();

        if(isset($_POST['sbmt'])){

            $brand = htmlspecialchars($_POST['brand']);
            $model = htmlspecialchars($_POST['model']);
            $year = htmlspecialchars($_POST['year']);
            $revision = htmlspecialchars($_POST['revision']);

            $pneu = htmlspecialchars($_POST['pneu']);
            $plaquette = htmlspecialchars($_POST['plaquette']);
            $disque = htmlspecialchars($_POST['disque']);
            $battery = htmlspecialchars($_POST['battery']);
            $clim = htmlspecialchars($_POST['clim']);
            $distrib = htmlspecialchars($_POST['distrib']);
            
            $type = [$pneu,$plaquette, $disque, $battery, $clim, $distrib];

            $date = htmlspecialchars($_POST['date']);
            $hour = htmlspecialchars($_POST['hour']);

            //faire un tableau regtoupant les rep a faire

            if(!empty($brand) && !empty($model) && !empty($year)){

                if(!empty($date) && !empty($hour)){

                    static::$success = $type;

                    // $stmt = $bdd->prepare("SELECT * FROM rdv WHERE `date` = ? AND hour = ?");
                    // $stmt->execute([$date, $hour]);
        
                    // $count = $stmt->rowcount();

                    // if($count === 0){
                    //     $insert = $bdd->prepare('INSERT INTO rdv(brand, model, `year`, `service`, `type`, `date`, hour) VALUES(?, ?, ?, ?, ?, ?, ?) ');
                    //     $insert ->execute([$brand, $model, $year, $revision, $type, $date, $hour]);
                    // }
                }
                else{
                    static::$erreur = "Veuillez choisir une date de rendez-vous*";
                }
            }
            else{
                static::$erreur = "Information sur le véhicule manquante*";
            }

        }
    }
    
}

?>