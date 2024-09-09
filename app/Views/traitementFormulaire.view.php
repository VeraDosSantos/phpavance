<?php
    include '../Views/partials/head.php';
?>
<h1>Traitement de mon formulaire</h1>
<?php
if(isset($_POST['prenom'])){
    $prenom = htmlspecialchars($_POST['prenom']);
    echo "<p>Hello $prenom</p>";
}

if(isset($_POST['email'])){
    $email = htmlspecialchars($_POST['email']);
    echo "<p>ton adresse email = $email</p>";
}

if(isset($_POST['message'])){
    $message = htmlspecialchars($_POST['message']);
    echo "<p>voilà le message : $message</p>";
}
?>
<?php
    include '../Views/partials/footer.php';
?>