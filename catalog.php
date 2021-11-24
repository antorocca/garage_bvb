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
        <a href="">Oui aidez-moi!</a>
    </div>
</section>
<h2 class="cen-tit cat-tit">Nos véhicules disponible à la vente</h2>
<section class="catalog">
    <?php
    foreach($cars as $car){
        echo'
        <article class="car-ann">
            <div>
                <img src="assets/upload/' . $car['picture'] . '" alt="' . $car['model'] . '">
            </div>
            <div>
                <h3>' . $car['model'] . '</h3>
                <h4>' . $car['brand'] . '</h4>
                <p>Année du modèle: ' . $car['year'] . '</p>
                <p>Mise en circulation: ' . $car['release-date'] . '</p>
                <p>Kilométrage: ' . $car['mileage'] . ' km</p>
                <p>Carburant: ' . $car['fuel'] . '</p>
                <p>' . $car['price'] . ' €</p>
                <p>' . nl2br($car['description']) . '</p>';
                if(strlen($car['addOption'])>400){
                    $car['addOption'] = nl2br(substr( $car['addOption'],0,550));
                    echo '<p>' . $car['addOption'] . '...</p>';
                }
                else{
                    echo '';
                }
            echo'
            </div>
        </article>
        <br>';/*a enlever*/
    }
    ?>
    
</section>

<?php include('include/footer.php'); ?>

<h3>' . $car['model'] . '</h3>
                <h4>' . $car['brand'] . '</h4>
                <p>Année du modèle: ' . $car['year'] . '</p>
                <p>Mise en circulation: ' . $car['release-date'] . '</p>
                <p>Kilométrage: ' . $car['mileage'] . ' km</p>
                <p>Carburant: ' . $car['fuel'] . '</p>
                <p>' . $car['price'] . ' €</p>
                <p>' . nl2br($car['description']) . '</p>
                <p>' . nl2br($car['addOption']) . '</p>