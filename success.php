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
        <p>Nom: <?=$recap['name']?></p>
        <p>Prénom: <?=$recap['firstname']?></p>
        <p>Véhicule: <?=$recap['brand'] . ' ' . $recap['model'] . ' ' . $recap['year']?></p>
        <p>Rendez-vous le <?=$recap['date']?> à <?=$recap['hour']?></p>
        <p>Commentaire: <?=$recap['commentary']?></p>
        <img src="assets/pictures/bvb_logo.svg" alt="BVB logo">
        <a href="index.php">retour à l'accueil</a>
    </article>
    <?php 
    echo '<pre>';
    var_dump($recap);
    echo '</pre><br><br><br><br><br><br>'; 
    echo '<pre>';
    var_dump($_SESSION['id']);
    echo '</pre>'; 
    ?>
</section>
<?php include('include/footer.php'); ?>