<?php 
session_start();
require_once 'function/database.php';

$bdd = Database::connect();

$i = $bdd->prepare('SELECT * FROM user INNER JOIN rdv WHERE rdv.idUser = ? AND user.id = ?');
$i->execute([$_SESSION['id'], $_SESSION['id']]);
$account = $i->fetch();


include('include/head.php');
include('include/header.php');
?>

<section class="account-sec">
    <?php
    /*RENDEZ VOUS SECTION*/
    /*put the date in array for the format*/
    $d = explode("-", $account['date']);
    /*construction of rendez-vous phrase and div*/
    echo '<article>
            <h3>Mes rendez-vous</h3>';
    if($account['date'] > date('Y-m-d')){
        echo '
            <p>Le ' . $d[2] . '/' . $d[1] . '/' . $d[0] . ' pour la ' . $account['service'];
            if(isset($account['type'])){
                echo ' et l\'entretien de: ';
            }
            else{
                echo ' de: ';
            }
        echo $account['brand'] . ' ' . $account['model'] . '</p>
        </article>';
    }
    else{
        echo '<p>Aucun rendez-vous</p>
        </article>';
    }

    /*HISTORIQUE SECTION*/
    /*put the date in array for the format*/
    $d = explode("-", $account['date']);
    /*construction of rendez-vous div*/
    echo '<article>
            <h3>Historique</h3>';
    if($account['date'] < date('Y-m-d')){
        echo '
            <p>Le ' . $d[2] . '/' . $d[1] . '/' . $d[0] . ' pour la ' . $account['service'];
            if(isset($account['type'])){
                echo ' et l\'entretien de: ';
            }
            else{
                echo ' de: ';
            }
        echo $account['brand'] . ' ' . $account['model'] . '</p>
        </article>';
    }
    else{
        echo '<p>Aucun ancien rendez-vous</p>
        </article>';
    }
    ?>
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