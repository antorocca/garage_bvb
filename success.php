<?php 
session_start();
require_once 'function/database.php';

$bdd = Database::connect();

$stmt = $bdd->prepare('SELECT rdv.brand, rdv.model, rdv.year, rdv.service, rdv.type, rdv.date, rdv.hour,rdv.commentary, user.name, user.firstname FROM rdv INNER JOIN user WHERE rdv.idUser = ? AND user.id = ?');
$stmt->execute([$_SESSION['id'], $_SESSION['id']]);
$recap = $stmt->fetch();

include('include/head.php');
include('include/header.php');
?> 

<section class="suc-cont">
    <h2 class="cen-tit">Demande confirmée</h2>
    <p>Vous recevrez bientôt un email / message avec votre devis et ce récapitulatif, il ne vous restera plus qu'a confirmer la date du rendez-vous !</p>
    <article>
        <h3 class="cen-tit">Récapitulatif</h3>
        <div>
            <p>M./Mme. <?=$recap['name'] . ' ' . $recap['firstname']?></p>
            <p></p>
            <p>Véhicule:<br><?=$recap['brand'] . ' ' . $recap['model'] . ' ' . $recap['year']?></p>
            <p>Service:<br><?=$recap['service']?><?php if(isset($recap['type'])){echo ', entretien';} ?></p>
            <?php 
            if(isset($recap['type'])){
                echo '<p>Entretien:<br>' . $recap['type'] . '</p>';
            } ?>
            
            <p>Date:<br><?=$recap['date']?> à <?=$recap['hour']?></p>

            <?php 
            if(isset($recap['commentary'])){
                echo '<p>Commentaire:<br>' . $recap['commentary'] . '</p>';
            } ?>
        </div>
        
        <img src="assets/pictures/bvb_logo.svg" alt="BVB logo">
        <a href="index.php">retour à l'accueil</a>




    </article>
    
</section>
<?php include('include/footer.php'); ?>
