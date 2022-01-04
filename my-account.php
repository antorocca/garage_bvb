<?php 
session_start();
require_once 'function/database.php';

$bdd = Database::connect();

$i = $bdd->prepare('SELECT * FROM user INNER JOIN rdv ON user.id = rdv.idUser WHERE user.id = ?');
$i->execute([$_SESSION['id']]);
$account = $i->fetchAll();


include('include/head.php');
include('include/header.php');
  
// }
// echo '<pre>';
// var_dump($account);
// echo '</pre>';
?>

<section class="account-sec">
    <?php
    /*RENDEZ VOUS SECTION*/
    /*construction of rendez-vous phrase and div*/
    echo '<article>
        <h3>Mes rendez-vous</h3>';
        foreach($account as $rdv){

            $d = explode("-", $rdv['date']);

            if($rdv['date'] > date('Y-m-d')){
                echo '<p>Le ' . $d[2] . '/' . $d[1] . '/' . $d[0] . ' pour la ' . $rdv['service'];
                    if(isset($rdv['type'])){
                        echo ' et l\'entretien de: ';
                    }
                    else{
                        echo ' de: ';
                    }
                echo $rdv['brand'] . ' ' . $rdv['model'] . '</p>';
            }
            else{
                echo '<p>Aucun rendez-vous</p>';
            }
        }
        echo'</article>';

    /*HISTORIQUE SECTION*/
    /*construction of rendez-vous div*/
    echo '<article>
            <h3>Historique</h3>';
    foreach($account as $Hrdv){

        $d = explode("-", $rdv['date']);
        
        if($Hrdv['date'] < date('Y-m-d')){
            echo '
                <p>Le ' . $d[2] . '/' . $d[1] . '/' . $d[0] . ' pour la ' . $Hrdv['service'];
                if(isset($Hrdv['type'])){
                    echo ' et l\'entretien de: ';
                }
                else{
                    echo ' de: ';
                }
            echo $Hrdv['brand'] . ' ' . $Hrdv['model'] . '</p>';
        }
        else{
            echo '<p>Aucun ancien rendez-vous</p>';
        }
    }

    ?>
    </article>

    <article>
        <h3>Modifier mes informations</h3>
        <p>Entrez votre mot de passe pour pouvoir modifier vos informations.</p>
        <label>Mot de passe:</label>
            <input type="text">
        
    </article>
    <a href="logout.php">Se déconnecter</a>
</section>

<?php 
include('include/footer.php');
?> 