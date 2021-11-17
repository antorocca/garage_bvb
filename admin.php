<?php 
session_start();
require_once 'function/database.php';
$bdd = Database::connect();

$stmtU = $bdd ->prepare('SELECT * FROM user');
$stmtU->execute();
$allUsers = $stmtU->fetchAll();

include('include/head.php');
include('include/header.php');


?> 
<h2 class="cen-tit">Liste des utilisateurs</h2>
<section class='user-admin'>
    <a href="">Créer un utilisateur</a>
    <?php
        foreach($allUsers as $user){
            echo'
            <div class="user-tab">
                <p>'. $user['id'] . '</p>
                <p>'. $user['name'] . '</p>
                <p>'. $user['email'] . '</p>
                <a href="#">Voir / Modifier</a>
                <a href="#">Supprimer</a>
            </div>';
        }
    ?>
</section>

<h2 class="cen-tit">Liste des véhicules</h2>
<section>
    <a href="crud/createC.php">Ajouter un véhicule</a>
 <!-- ici foreach des vehicule -->
</section>
