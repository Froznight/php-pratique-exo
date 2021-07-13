<!DOCTYPE html>
<html lang="french">
<?php
    $titre="Donnée saisie";
    include("./include/header.php");
?>
<body class="m-4">
   <?php
   include("./include/menu.php");
   ?>
   <H1>Données à saisire</H1>
   <form>
  <div class="mb-3">
    <label for="title" class="form-label">Titre de la musique</label>
    <input type="text" class="form-control" id="title" name="titre">
  </div>
  <div class="mb-3">
    <label for="intret" class="form-label">Interpret</label>
    <input type="text" class="form-control" id="intret" name="intret">
  </div>
  <div class="mb-3">
    <label for="genre" class="form-label">genre</label>
    <input type="text" class="form-control" id="genre" name="genre">
  </div>
  <div class="mb-3">
    <label for="annee" class="form-label">Annee</label>
    <input type="id" class="form-control" id="annee" name="annee">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>