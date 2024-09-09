<?php
    include '../Views/partials/head.php';
    echo '<pre>';
        var_dump($_GET);
    echo '</pre>';

    if (isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) {  // si existent les indices "article" et "couleur" et "prix", alors on peut afficher leur valeur :
        echo '<div">';
        echo '<h1>Détail du produit</h1>';
        echo '<p>Article : ' . htmlspecialchars($_GET['article']) . '</p>';
        echo '<p>Couleur : ' . htmlspecialchars($_GET['couleur']) . '</p>';
        echo '<p>Prix : ' . htmlspecialchars($_GET['prix']) . '€</p>';
        echo '</div>';
    } else {
        // sinon, on met un message à l'internaute :
        echo '<p class="error">Ce produit n\'existe pas !</p>';
    }

    if(isset($_GET['prenom'])){
        $prenom = $_GET['prenom'];
        echo "<p>$prenom</p>";
    }

    if(isset($_GET['age'])){
        $age = $_GET['age'];
        echo "<p>$age</p>";
    }

    include '../Views/partials/footer.php';
?>