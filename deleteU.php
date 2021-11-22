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

<h2 class="cen-tit">Supprimer un utilisateur</h2>
<div class="delete">
    <p>Voulez-vous vraiment supprimer <?php echo $userMail['email'] ?> ?</p>
    <form  action="deleteU.php?id=<?php echo $id ?>" method="post">
        <input class="deleteBtn" type="submit" name="deleteInput" value="Supprimer">
    </form>
    <a class="retourAccueil" href="admin.php">Accueil administrateur</a>
</div>


<?php
include('include/footer.php');
?>