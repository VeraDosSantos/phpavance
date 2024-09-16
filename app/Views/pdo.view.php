<?php
    include '../Views/partials/head.php';
?>
    <h1>Le PDO ! </h1>
<p>$pdo = new PDO("mysql:host=localhost;dbname=societe","root","",array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "set NAMES utf8");</p>

<p><?= $retour ?></p>
<?php
    include '../Views/partials/footer.php';
?>