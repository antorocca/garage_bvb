<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';

$bdd = Database::connect();

$car1 = $bdd->prepare('SELECT * FROM car WHERE id=?');
$car1->execute([$_GET['id']]);
$car = $car1->fetch();

include('include/head.php');
include('include/header.php');
?> 

<section class="carDet">
    <div>
        <div class="sld-container">
            <div class="btn-left-sld"><i class="fas fa-chevron-left"></i></div>
            <div class="car-slider">
                <img class="img-sld active" src="assets/upload/<?=$car['picture']?>" alt="<?=$car['mode']?>">
                <img class="img-sld" src="assets/upload/tiguan2.jpg" alt="<?=$car['mode']?>">
                <img class="img-sld" src="assets/upload/tiguan3.jpg" alt="<?=$car['mode']?>">
                <img class="img-sld" src="assets/upload/tiguan4.jpg" alt="<?=$car['mode']?>">
            </div>
            <div class="btn-right-sld"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="car-cld">
            <h3>Prendre rendez-vous pour un essai:</h3>
            <img src="assets/pictures/Sans titre2.png" alt="">
        </div>
    </div>
    
    <article>
        <h2><?=$car['model'] ?></h2>
        <h3><?=$car['brand'] ?></h3>
        <div>
            <div class="infoC">
                <p><i class="fas fa-calendar-alt"></i> Année du modèle:<br><span><?=$car['year']?></span></p>
                <p><i class="far fa-calendar-alt"></i> Mise en circulation:<br><span><?=$car['release-date']?></span></p>
                <p><i class="fas fa-tachometer-alt"></i> Kilométrage:<br><span><?=$car['mileage']?>km</span></p>
                <p><i class="fas fa-gas-pump"></i> Carburant:<br><span><?=$car['fuel']?></span></p>
            </div>
            <h3><?=$car['price'] ?> €</h3>
            <p><?=$car['description']?></p>
            <p><?=nl2br($car['addOption'])?></p>
        </div>
    </article>
</section>
<script src="assets/js/app.js"></script>
<?php include('include/footer.php'); ?>
