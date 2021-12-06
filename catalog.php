<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';

$bdd = Database::connect();

$car = $bdd->prepare('SELECT * FROM car');
$car->execute();
$cars = $car->fetchAll();

include('include/head.php');
include('include/header.php');
?> 

<section class="mandate">
    <div>
        <h2>Vous cherchez un véhicule?</h2>
        <h3>Nous pouvons trouver la meilleure occasion pour vous !</h3>
        <p>Donnez nous un modèle et des critères,<br> nous iront chercher la meilleure occasion pour vous ! </p>
        <a href="mandate.php">Oui aidez-moi!</a>
    </div>
</section>
<h2 class="cen-tit cat-tit">Nos véhicules disponible à la vente</h2>
<section class="catalog">
    <?php
    foreach($cars as $car){
        echo'
        <article class="car-ann">
            <div>
                <a href="car.php?id=' . $car['id'] . '"><img src="assets/upload/' . $car['picture'] . '" alt="' . $car['model'] . '"></a>
            </div>
            <div class="logo-ann">
                <img src="assets/pictures/'. $car['brandLogo'] . '">
                <h2>' . $car['price'] . ' €</h2>
            </div>
            <div class="txt-ann">
                <h3>' . $car['model'] . '<i class="far fa-hand-pointer"></i></h3>
                <h4>' . $car['brand'] . '</h4>
                <div>
                    <p><i class="fas fa-calendar-alt"></i> Année du modèle:<br><span>' . $car['year'] . '</span></p>
                    <p><i class="far fa-calendar-alt"></i> Mise en circulation:<br><span>' . $car['release-date'] . '</span></p>
                    <p><i class="fas fa-tachometer-alt"></i> Kilométrage:<br><span>' . $car['mileage'] . ' km</span></p>
                    <p><i class="fas fa-gas-pump"></i> Carburant:<br><span>' . $car['fuel'] . '</span></p>
                </div>
                <p>' . $car['price'] . ' €</p>
                <p>' . nl2br($car['description']) . '</p>';
                if(strlen($car['addOption'])>400){
                    $car['addOption'] = nl2br(substr( $car['addOption'],0,400));
                    echo '<p>' . $car['addOption'] . '...</p>';
                };
                echo'
                <a href="car.php?id=' . $car['id'] . '">Détails</a>
            </div>
        </article>';/*a enlever*/
    }
    ?>
    
</section>

<?php include('include/footer.php'); ?>