<!DOCTYPE html>
<html lang="fr">
<?php
  $titre="Donnée saisie";
  include("./include/header.php");
  // connect to Data Base
  include("./include/connect.php");
?>
<body>
  <?php
    include("./include/menu.php");
  ?>
  <H1 class="pt-5 pb-3">Données à saisire</H1>
  <!-- [Form for insertion] -->
  <form action="./save.php?action=insert" method="POST" class="p-5">
    <div class="mb-3">
      <label for="title" class="form-label">Titre de la musique</label>
      <input type="text" class="form-control" id="title" name="titre">
    </div>
    <div class="mb-3">
      <label for="intret" class="form-label">Interpret</label>
      <input type="text" class="form-control" id="intret" name="intret">
    </div>
    <div class="mb-3">
      <label for="genre" class="form-label">Genre</label>
      <input type="text" class="form-control" id="genre" name="genre">
    </div>
    <div class="mb-3">
      <label for="annee" class="form-label">Année</label>
      <input type="id" class="form-control" id="annee" name="annee">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</body>
</html>