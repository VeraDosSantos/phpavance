<?php
    include '../Views/partials/head.php';
?>
<h1>Inscription</h1>
<?php
if (!empty($arrayError)) {
    foreach ($arrayError as $error) {
        ?>
        <div class="alert alert-secondary" role="alert">
            <?= $error ?>
        </div>
        <?php
    }
}
?>
<form method="POST">
    <div class="col-md-4 mx-auto d-block mt-5">
        <div class="mb-3">
            <label for="nom" class="form-label">Votre nom</label>
            <input type="text" class="form-control" name="nom" id="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Votre prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom">
        </div>
        <div class="mb-3">
            <label class="form-label" for="genre">Tu te sent</label>
            <select class="form-select" name="genre" id="genre">
                <option>Genre</option>
                <option value="f">Femme</option>
                <option value="m">Homme</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="service" class="form-label">Votre service</label>
            <input type="text" class="form-control" name="service" id="service">
        </div>
        <div class="mb-3">
            <label for="date_embauche" class="form-label">Date d'embauche</label>
            <input type="date" class="form-control" id="date_embauche" name="date_embauche">
        </div>
        <div class="mb-3">
            <label for="salaire" class="form-label">Votre salaire</label>
            <input type="number" class="form-control" name="salaire" id="salaire">
        </div>
        <button type="submit" class="btn btn-light mx-auto d-block p-3">Valider</button>
    </div>
</form>
<?php
    include '../Views/partials/footer.php';
?>