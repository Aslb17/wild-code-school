<?php $title = 'Les membres de l\'équipage'; ?>

<?php ob_start(); ?>

<main>
    <h3>Vous avez sélectionné 50 Argonautes, il est temp de prendre la mer.</h3>

    
    <!-- Member list -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list">
      <div class="row">
        <?php foreach ($argonautes as $argonaute) : ?>
          <div class="member-item col-4"><?= $argonaute['name'] ?></div>
        <?php endforeach ?>
      </div>
    </section>
</main>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>