<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';

$bdd = Database::connect();

$car1 = $bdd->prepare('SELECT * FROM car WHERE id=?');
$car1->execute([$_SESSION['id']]);
$car = $car1->fetch();

include('include/head.php');
include('include/header.php');
?> 

<section class="carDet">
    <div class="car-slider">
        <img src="assets/upload/<?=$car['picture'] ?>" alt="<?=$car['model'] ?>">
        <img src="assets/upload/tiguan2.jpg" alt="<?=$car['model'] ?>">
        <img src="assets/upload/tiguan3.jpg" alt="<?=$car['model'] ?>">
        <img src="assets/upload/tiguan4.jpg" alt="<?=$car['model'] ?>">
    </div>
    <article>
        <h2><?=$car['model'] ?></h2>
        <h3><?=$car['brand'] ?></h3>
        <div>
            <p><i class="fas fa-calendar-alt"></i> Année du modèle:<br><span><?=$car['year']?></span></p>
            <p><i class="far fa-calendar-alt"></i> Mise en circulation:<br><span><?=$car['release-date']?></span></p>
            <p><i class="fas fa-tachometer-alt"></i> Kilométrage:<br><span><?=$car['mileage']?>km</span></p>
            <p><i class="fas fa-gas-pump"></i> Carburant:<br><span><?=$car['fuel']?></span></p>
            <h3><?=$car['price'] ?> €</h3>
        </div>

    </article>
</section>

<script src="assets/js/slider.js"></script>
<?php include('include/footer.php'); ?>
