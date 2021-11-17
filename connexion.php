<?php
session_start();
require_once 'function/connexion.php';
require_once 'function/database.php';
Submit::connexion();
include('include/head.php');
include('include/header.php');
?> 

<div class="connexion">
            <h2>Se connecter</h2>
            <form action="" method="post">
            <?php
                if(Submit::$erreurCo || Submit::$ban){
                    echo '<h4 style="color:red; margin:1vh 1vw;">' . Submit::$erreurCo, Submit::$ban . '</h4>';
                }
                elseif(Submit::$successCo){
                    echo '<h4 style="color:rgb(28, 100, 255); margin:5px 0px;">' . Submit::$successCo . '</h4>';
                }
            ?>
                <label>E-mail:</label>
                <input type="email" name="email">
                <label>Mot de passe:</label>
                <input type="password" name="mdp">
                <input type="submit" name="connexion" value="Se connecter">
            </form>
    </div>


<?php include('include/footer.php'); ?>