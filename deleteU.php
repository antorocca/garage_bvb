<?php
session_start();
require_once 'function/database.php';
require_once 'function/crudU.php';

CrudU::deleteUser();
$bdd= Database::connect();

$id = $_GET['id'];

$stmt = $bdd->prepare('SELECT email FROM user WHERE id=?');
$stmt->execute([$id]);
$userMail = $stmt->fetch();


include('include/head.php');
include('include/header.php');
?>
<h2 class="userTitle">Supprimer un utilisateur</h2>

    <div class="delete">
        <div>
            <p>Voulez-vous vraiment supprimer <?php echo $userMail['email'] ?> ?</p>
        </div>
        <form  action="deleteU.php?id=<?php echo $id ?>" method="post">
            <input class="deleteBtn" type="submit" name="deleteInput" value="Supprimer">
        </form>
    </div>

    <a class="retourAccueil" href="admin.php">Accueil administrateur</a>

<?php
include('include/footer.php');
?>