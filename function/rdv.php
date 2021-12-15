<?php
class Rdv{
    public static $error = '';

    public static function maintenance(){

        $bdd = Database::connect();

        if(isset($_POST['sbmt'])){
            /*car's info*/
            $brand = htmlspecialchars($_POST['brand']);
            $model = htmlspecialchars($_POST['model']);
            $year = htmlspecialchars($_POST['year']);
            $revision = htmlspecialchars($_POST['revision']);

            /*needed, if exist put in array*/
            $type = [];

            if(isset($_POST['pneu']) && $_POST['pneu'] !== null){
                $pneu = htmlspecialchars($_POST['pneu']);
                array_push($type, $pneu);
            }
            if(isset($_POST['plaquette']) && $_POST['plaquette'] !== null){
                $plaquette = htmlspecialchars($_POST['plaquette']);
                array_push($type, $plaquette);
            }
            if(isset($_POST['disque']) && $_POST['disque'] !== null){
                $disque = htmlspecialchars($_POST['disque']);
                array_push($type, $disque);
            }
            if(isset($_POST['battery']) && $_POST['battery'] !== null){
                $battery = htmlspecialchars($_POST['battery']);
                array_push($type, $battery);
            }
            if(isset($_POST['clim']) && $_POST['clim'] !== null){
                $clim = htmlspecialchars($_POST['clim']);
                array_push($type, $clim);
            }
            if(isset($_POST['distrib']) && $_POST['distrib'] !== null){
                $battery = htmlspecialchars($_POST['distrib']);
                array_push($type, $battery);
            }

            /*implode array for DB*/
            $typeS = implode(', ', $type);

            /*appointment hour*/
            $date = htmlspecialchars($_POST['date']);
            $hour = htmlspecialchars($_POST['hour']);


            if(!empty($brand) && !empty($model) && !empty($year)){//must have brand...

                if(!empty($date) && !empty($hour)){//must have appointement
                    //verify no appointment in same time
                    $stmt = $bdd->prepare("SELECT * FROM rdv WHERE `date` = ? AND hour = ?");
                    $stmt->execute([$date, $hour]);
        
                    $count = $stmt->rowcount();

                    if($count === 0){
                        //insert in DB
                        $insert = $bdd->prepare('INSERT INTO rdv(brand, model, `year`, `service`, `type`, `date`, hour) VALUES(?, ?, ?, ?, ?, ?, ?) ');
                        $insert ->execute([$brand, $model, $year, $revision, $typeS, $date, $hour]);

                        header('Location: success.php');
                    }
                    else{
                        static::$error = "La date de rendez-vous n'est pas disponible";
                    }
                }
                else{
                    static::$error = "Veuillez choisir une date de rendez-vous*";
                }
            }
            else{
                static::$error = "Information sur le véhicule manquante*";
            }

        }
    }
    
}

?>