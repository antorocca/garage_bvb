<?php 
session_start();
require_once 'function/database.php';

$bdd = Database::connect();

include('include/head.php');
include('include/header.php');
?> 

<section class="suc-cont">
    <h2 class="cen-tit">Demande confirmée</h2>
    <p>Vous recevrez bientôt un email / message avec votre devis, il ne vous restera plus qu'a confirmer la date du rendez-vous !</p>
    <img src="assets/pictures/bvb_logo.svg" alt="BVB logo">
    <a href="index.php">retour à l'accueil</a>
</section>
<?php include('include/footer.php'); ?>