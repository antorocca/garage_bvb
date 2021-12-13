<?php
$bdd = Database::connect();

if(!empty($_SESSION)){
    $stmt = $bdd->prepare('SELECT * FROM user WHERE id=?');
    $stmt->execute([$_SESSION['id']]);
    $user = $stmt->fetch();
}
// var_dump($_SESSION);
?>
<body>
    <header>
        <div>
            <h1>BVB auto<br>La qualité près de chez vous</h1>
            <div class="header-logo">
                <a href="index.php">
                    <img src="assets/pictures/bvb_logo.svg" alt="logo BVB auto">
                </a>
            </div>
            <div class="header-Rbutton">
                <?php
                    if(!empty($_SESSION)){
                        echo'<a class="connected" href="my-account.php">
                                <p>' . $user['name'] . ' ' . $user['firstname'] . '</p>
                                <hr>
                                <p>Mon compte</p>
                            </a>';
                    }else{
                        echo 
                        '<a href="inscription.php">S\'inscrire</a>
                        <a href="connexion.php">Se connecter</a>';
                    }
                ?>
                
            </div>
        </div>
        <nav>
            <a href="">Révisions et entretien</a>
            <a href="meca.php">Réparation et Diagnostique</a>
            <a href="catalog.php">La concession auto</a>
        </nav>
    </header>
    <?php
        if(!empty($_SESSION) && $user['role']=='admin'){
            echo '<a class="admin-btn" href="admin.php">Page administrateur</a>';
        }
    ?>


    