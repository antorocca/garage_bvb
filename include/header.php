<?php
$bdd = Database::connect();
if(!empty($_SESSION)){
$stmt = $bdd->prepare('SELECT * FROM user WHERE id=?');
$stmt->execute([$_SESSION['id']]);
$user = $stmt->fetch();
}
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
                        echo'<a href="my-account.php">
                                <p>' . $user['name'] . ' ' . $user['firstname'] . '</p>
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
            <a href="">Mécanique et Diagnostique</a>
            <a href="">La concession auto</a>
        </nav>
    </header>


    