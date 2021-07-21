<!DOCTYPE html>
<html lang="fr">
<?php
    $titre="page d'accueil";
    include("./include/header.php");
?>
<body class="m-4">
    <?php
        include("./include/menu.php");
        $nom = "Loïc";
        // this my first title
        echo "<h1>Helo ".$nom." </h1>";

        // echo "ceci est une donnée".$_GET['pouet']." de type get ";
        // // transfer varible to cible page
        // // ?is very important for interpreteur 
        // echo '<a href="./cible.php?pouet=varible&trucMuch=test"> cliquer ici </a>'
    
    ?>
    <h1>Accueil</h1>
    <!-- <form action="./cible.php" method=post>
        <lable for="">Nom</lable>
        <input type="text" name="nom" id="nom"></input>
        <lable for="">prenom</lable>
        <input type="text" name="prenom" id="prenom"></input>
        <button>Envoyer</button>
    </form> -->
</body>
</html>