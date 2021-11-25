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

</section>
<section>

</section>

<?php include('include/footer.php'); ?>