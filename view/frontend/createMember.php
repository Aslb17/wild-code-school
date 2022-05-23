<?php $title = 'Les membres de l\'équipage'; ?>

<?php ob_start(); ?>

<main>

    <div class="alert alert-success" role="alert">
        <?= $_POST["name"] ?> a bien été ajouté ! Il partira avec vous vers Colchide.
    </div>
    <p class="back"><a href="index.php"> Retour à la liste des Argonautes</a></p>
    

</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>