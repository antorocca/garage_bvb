<?php 
session_start();
require_once 'function/database.php';

if($_SESSION['role']!=="admin") {
    header('Location: logout.php');
}

$bdd = Database::connect();

$stmtU = $bdd ->prepare('SELECT * FROM user ORDER BY `role` ASC');
$stmtU->execute();
$allUsers = $stmtU->fetchAll();

$stmtC = $bdd ->prepare('SELECT * FROM car');
$stmtC->execute();
$allCars = $stmtC->fetchAll();

include('include/head.php');
include('include/header.php');


?> 
<h2 class="cen-tit">Liste des utilisateurs</h2>
<section class='user-admin'>
    <a href="createU.php">Créer un utilisateur</a>
    <?php
        foreach($allUsers as $user){
            echo'
            <div class="user-tab">
                <p>'. $user['id'] . '</p>
                <p>'. $user['name'] . '</p>
                <p>'. $user['email'] . '</p>
                <p>'. $user['role'] . '</p>
                <a href="updateU.php?id=' . $user['id'] . '">Voir / Modifier</a>
                <a href="deleteU.php?id=' . $user['id'] . '">Supprimer</a>
            </div>';
        }
    ?>
</section>

<h2 class="cen-tit">Liste des véhicules</h2>
<section class='user-admin'>
    <a href="createU.php">Créer une nouvelle annonce</a>
    <?php
        foreach($allCars as $car){
            echo'
            <div class="user-tab">
                <p>' . $car['id'] . '</p>
                <p>' . $car['brand'] . '</p>
                <p>' . $car['model'] . '</p>
                <p>' . $car['year'] . '</p>
                <a href="updateU.php?id=' . $car['id'] . '">Voir / Modifier</a>
                <a href="deleteU.php?id=' . $car['id'] . '">Supprimer</a>
            </div>';
        }
    ?>
</section>
<?php
include('include/footer.php');
?>