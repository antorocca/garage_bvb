<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';

$bdd = Database::connect();


include('include/head.php');
include('include/header.php');
?> 

<section class="pres-meca">
    <div>
        <h2 class="cen-tit">Révision et entretien</h2>
        <p>Pour rouler en toute sérénité, il est indispensable de veiller au bon entretien de son véhicule. C’est à la fois une question de <strong>confort et de sécurité.</strong> Respecter le carnet d’entretien constructeur et effectuer les <strong>révisions</strong> vous assure de conserver votre véhicule en bon état de fonctionnement en faisant réaliser les réparations nécessaires au moment où vous en avez besoin.</p>
        <p>Faites confiance a <strong>BVB auto</strong> pour votre révision ou pour l'entretien de votre véhicule, nous vous garantissons des <strong>prix bas toute l'année.</strong> Notre équipe est formée en permanence pour apporter un soin personnalisé à votre voiture.</p>
        <p>Remplissez ce formulaire ci dessous afin de préparez notre rendez-vous au mieux</p>
    </div>
</section>
<section class="meca-info">
    <h2 class="cen-tit">Mon véhicule</h2>
    <form action="">
        <div>
            <label for="">Marque: </label>
                <input type="text" name="brand" placeholder="exemple: Renault">

            <label for="">Modèle et cylindrée: </label>
                <input type="text" name="model" placeholder="exemple: Clio 4 / 1.4l / 80ch">

            <label for="">Année: </label>
                <input type="text" name="year" placeholder="exemple: 2013">

            <fieldset class="revision">
                <legend>Effectuer une révision</legend>
                <input type="radio" name="revision" value="yes">
                    <label>Oui</label>
                <input type="radio" name="revision" value="no">        
                    <label>Non</label>
            </fieldset>

            <fieldset class="entretien">
                <legend>Entretien</legend>
                <label for="">Pneu</label>
                <!--a tester si on les mets dans un tableau ou en solo-->
                    <input type="checkbox" name="" value="pneu">
                <label for="">Plaquette</label>
                    <input type="checkbox" name="" value="plaquette">
                <label for="">Disque</label>
                    <input type="checkbox" name="" value="disque">
                <label for="">Batterie</label>
                    <input type="checkbox" name="" value="batterie">
                <label for="">Climatisation</label>
                    <input type="checkbox" name="" value="climatisation">
                <label for="">Courroie de distribution</label>
                    <input type="checkbox" name="" value="distribution">
            </fieldset>
        </div>
        <div>
            <img src="assets/pictures/Sans titre2.png" alt="">
            <input type="submit" value="Valider">
        </div>
    </form>
    <p>Vous recevrez bientot un email / message avec votre devis, il ne vous restera plus qu'a confirmer la date du rendez-vous !</p>
</section>

<?php include('include/footer.php'); ?>