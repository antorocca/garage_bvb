<?php
session_start();
require_once 'function/database.php';
require_once 'function/crudU.php';

CrudU::updateUser();
$bdd= Database::connect();

$id = $_GET['id'];

$stmt = $bdd->prepare('SELECT * FROM user WHERE id=?');
$stmt->execute([$id]);
$userUpd = $stmt->fetch();


include('include/head.php');
include('include/header.php');
?>
<h2 class="cen-tit">Modifier un utilisateur</h2>
<div class="upd-tab">
    <div class="seeU">   
            <h3>Informations</h3>    
            <p>Adresse E-mail: </p>
                <p><?= $userUpd['email'] ?></p>
            <p>Nom: </p>
                <p><?= $userUpd['name'] ?></p>
            <p>Prénom: </p>
                <p><?= $userUpd['firstname'] ?></p>
            <p>Tel: </p>
                <p><?= $userUpd['phone'] ?></p>
            <p>Adresse: </p>
                <p><?= $userUpd['address'] ?></p>
            <p>Ville: </p>
                <p><?= $userUpd['city'] ?></p>
            <p>Code postal: </p>
                <p><?= $userUpd['postal'] ?></p>
            <p>Rôle de l'utilisateur: </p>
                <p><?= $userUpd['role'] ?></p>
    </div>

    <div class="updU">
        <h3>Modifier les informations</h3>
        <form action="updateU.php?id=<?=$userUpd['id'] ?>" method="post">
                <label>Modifier l'email: </label>
                    <input type="text" name="updEmail">
                <label>Modifier le nom: </label>
                    <input type="text" name="updName">
                <label>Modifier le prénom: </label>
                    <input type="text" name="updFirstname">
                <label>Modifier le téléphone: </label>
                    <input type="text" name="updPhone">
                <label>Modifier l'adresse: </label>
                    <input type="text" name="updAddress">
                <label>Modifier la ville: </label>
                    <input type="text" name="updCity">
                <label>Modifier le code postal: </label>
                    <input type="text" name="updPostal">
                <label>Modifier le rôle: </label>
                    <select name="updRole">
                        <option value=""></option>
                        <option value="user">Utilisateur</option>
                        <option value="admin">Administrateur</option>
                    </select>
                
            <input class="submitUpd" type="submit" name='sbmUpd' value="Sauvegarder les modifications">
        </form>
    </div>
    <a href="admin.php">Accueil Administrateur</a>
</div>

<?php
include('include/footer.php');
?>