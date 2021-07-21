<!DOCTYPE html>
<html lang="fr">
<?php
    $titre="Donnée récupére";
    include("./include/header.php");
?>
<body class="m-4">
   <?php
   include("./include/menu.php");
   ?>
   <H1>Modifier</H1>
   <?php
    switch($_GET['Choix']){
        default:
        ?>
        <a href="./modifier.php?choix=formulaire">Aller au formulaire</a>
        <?php
        case'formulaire':
            echo '<h2> je suis dans mon formulaire </h2>';
            break;
    }
   ?>
</body>
</html>