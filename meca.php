<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';

$bdd = Database::connect();


include('include/head.php');
include('include/header.php');
?> 

<input type="date">

<?php include('include/footer.php'); ?>