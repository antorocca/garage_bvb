<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';

include('include/head.php');
include('include/header.php');
?> 
<form class="cre-us-form" action="" method="post">
    <h2 class="cen-tit">Créer un utilisateur</h2>
    <?php
        if(Submit::$erreur){
            echo '<h4 style="color:red;margin:5px 0px;">' . Submit::$erreur . '</h4>';
        }
        elseif(Submit::$success) {
            echo '<h4 style="color:rgb(28, 100, 255);margin:5px 0px;">' . Submit::$success . '</h4>';
        }
    ?>
    <label>E-mail:</label>
        <input class="inputSubscribe" type="email" name="email">
    <label>Votre nom:</label>
        <input class="inputSubscribe" type="text" name="name">
    <label>Votre prénom:</label>
        <input class="inputSubscribe" type="text" name="firstname">
    <label>Téléphone:</label>
        <input class="inputSubscribe" type="text" name="phone">
    <label>Votre adresse:</label>
        <input class="inputSubscribe" type="text" name="address">
    <label>Ville:</label>
        <input class="inputSubscribe" type="text" name="city">
    <label>Code postal:</label>
        <input class="inputSubscribe" type="text" name="postal">
    <label>Mot de passe:</label>
        <input class="inputSubscribe" type="password" name="mdp">
    <label>Confirmation du mot de passe:</label>
        <input class="inputSubscribe" type="password" name="mdp2">
    <input class="btnSubscribe" type="submit" name="submit" value="Créer l'utilisateur">
</form>



<?php include('include/footer.php'); ?>