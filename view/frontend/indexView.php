<?php $title = 'Les membres de l\'équipage'; ?>

<?php ob_start(); ?>

<main>
    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form class="new-member-form" action="index.php?action=newMember" method="POST">
      <label for="name">Nom de l'Argonaute</label>
      <input id="name" name="name" type="text" placeholder="Charalampos" /><br>

      <!-- <label for="description">Description (facultative)</label>
      <input id="description" name="description" type="text" placeholder="Chanceux" /><br> -->
      <button type="submit">Envoyer</button>
    </form>
    
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