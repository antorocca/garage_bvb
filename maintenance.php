<?php 
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';
require_once 'function/rdv.php';

$bdd = Database::connect();
Rdv::maintenance();

include('include/head.php');
include('include/header.php');
?> 

<section class="pres-meca">
    <div>
        <h2 class="cen-tit">Révision et entretien</h2>
        <p>Pour rouler en toute sérénité, il est indispensable de veiller au bon entretien de son véhicule. C’est à la fois une question de <strong>confort et de sécurité.</strong> Respecter le carnet d’entretien constructeur et effectuer les <strong>révisions</strong> vous assure de conserver votre véhicule en <strong>bon état</strong> de fonctionnement en faisant réaliser les réparations nécessaires au moment où vous en avez besoin.</p>
        <p>Faites confiance à <strong>BVB auto</strong> pour votre révision ou pour l'entretien de votre véhicule, nous vous garantissons des <strong>prix bas toute l'année.</strong> Notre équipe est formée en permanence pour apporter un soin personnalisé à votre voiture.</p>
        <p>Remplissez ce formulaire ci-dessous afin de préparer notre rendez-vous au mieux</p>
    </div>
</section>
<section class="meca-info">
    <h2 class="cen-tit">Prendre rendez-vous</h2>
    <form action="" method="post">
        <div>
            <label for="">Marque: </label>
                <input type="text" name="brand" placeholder="exemple: Renault">

            <label for="">Modèle et cylindrée: </label>
                <input type="text" name="model" placeholder="exemple: Clio 4 / 1.4l / 80ch">

            <label for="">Année: </label>
                <input type="text" name="year" placeholder="exemple: 2013">

            <fieldset class="revision">
                <legend>Effectuer une révision / vidange</legend>
                <input type="radio" name="revision" value="Revision">
                    <label>Oui</label>
                <input type="radio" name="revision" value="">        
                    <label>Non</label>
            </fieldset>

            <fieldset class="entretien">
                <legend>Entretien</legend>
                <label for="">Pneu</label>
                    <input type="checkbox" name="pneu" value="Pneu">
                <label for="">Plaquette</label>
                    <input type="checkbox" name="plaquette" value="Plaquette">
                <label for="">Disque</label>
                    <input type="checkbox" name="disque" value="Disque">
                <label for="">Batterie</label>
                    <input type="checkbox" name="battery" value="Batterie">
                <label for="">Climatisation</label>
                    <input type="checkbox" name="clim" value="Climatisation">
                <label for="">Courroie de distribution</label>
                    <input type="checkbox" name="distrib" value="Distribution">
            </fieldset>
        </div>
        <div>
            <label>Commentaire (facultatif):</label>
                <textarea name="commentary" cols="30" rows="7"></textarea>
            <h4>Date et heure de rendez-vous:</h4>
            <input type="date" name="date">
            <select name="hour">
                <option value="9h">9h00</option>
                <option value="10h">10h00</option>
                <option value="11h">11h00</option>
                <option value="13h">13h00</option>
                <option value="14h">14h00</option>
                <option value="15h">15h00</option>
                <option value="16h">16h00</option>
                <option value="17h">17h00</option>
                <option value="18h">18h00</option>
            </select>
            <input type="submit" value="Valider" name="sbmt">
        </div>
    </form>
    <?php
        if(Rdv::$error){
            echo '<p style="color:red;font-weight:bold;">' . Rdv::$error . '</p>';
        }
    ?>
</section>
<?php include('include/footer.php'); ?>