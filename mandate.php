<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';

$bdd = Database::connect();

include('include/head.php');
include('include/header.php');
?> 
<section class="mdt">
        <h2 class="cen-tit">Recherche de vehicule</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptatum quaerat quisquam dolorum, eum, perspiciatis, culpa impedit autem consectetur rem veniam? Deleniti, dolores incidunt! In veritatis quas nam consequatur, quibusdam nobis ipsum maxime qui, ad error dolore?</p>

        <p>Remplissez ce premier questionnaire en y renseignant les informations demandées, nous vous recontacterons par la suite avec une première sélection de véhicule afin d'affiner votre recherche.</p>

        <!-- a afficher que si pas connecter ou pas de comptes -->
        <p>Vous devez être inscrit pour pouvoir profiter de ce service par internet</p>

        <h3 class="cen-tit">Informations sur le véhicule recherché</h3>
        <form action="">
            <label for="">Marque:</label>
                <input type="text">
            <label for="">Modèle:</label>
                <input type="text">
            <label for="">Année:</label>
                <input type="text">
            <label for="">Kilometrage:</label>
                <input type="text">
            <label for="">Couleur:</label>
                <input type="text">
            <label for="">Budget:</label>
                <input type="text">
            <label for="">Commentaires:</label>
                <textarea name="" id="" rows="8"></textarea>
            <input type="submit" value="Valider">
        </form>
</section>

<?php include('include/footer.php'); ?>
