<?php
    include '../Views/partials/head.php';
?>
    <form action="traitementFormulaire.view.php" method="POST">
        <div class="form-group">
            <label for="email">Adresse e-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Entrez votre e-mail">
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" rows="4" placeholder="Entrez votre message"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
<?php
    include '../Views/partials/footer.php';
?>