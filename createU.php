<?php 
session_start();
require_once 'function/crudU.php';
require_once 'function/database.php';

CrudU::createUser();

include('include/head.php');
include('include/header.php');
?> 
<form class="cre-us-form" action="" method="post">
    <h2 class="cen-tit">Créer un utilisateur</h2>
    <?php
        if(isset($_POST['submit'])){
            echo '<h4 style="color:red;margin:1vh 1vw;">' . CrudU::$erreur . '</h4>';
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
    <label>Rôle:</label>
    <select name="role">
         <option value=""></option>
         <option value="admin">Administrateur</option>
         <option value="user">Utilisateur</option>
    </select>
    <label>Mot de passe:</label>
        <input class="inputSubscribe" type="password" name="mdp">
    <label>Confirmation du mot de passe:</label>
        <input class="inputSubscribe" type="password" name="mdp2">
    <input class="btnSubscribe" type="submit" name="submit" value="Créer l'utilisateur">
</form>



<?php include('include/footer.php'); ?>