<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';

$bdd = Database::connect();

$car1 = $bdd->prepare('SELECT * FROM car WHERE id=?');
$car1->execute([$_GET['id']]);
$car = $car1->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/style2.css">
        <title>Document</title>
    </head>
<?php include('include/header.php');
?> 

<section class="carDetest">
    
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
