<?php
    $titre="Résulta de recherche";
    include("./include/header.php");

    ?>
    <body>
        <?php
        include("./include/menu.php");
        // connect to my Data base
        $user = "root";
        $passe = "root";
        // check of good excut of sql connect and request 
        try {
            $dbc = new PDO('mysql:host=localhost;dbname=musique', $user,$passe);
            // request sql

            // logout to morceau DB
            $dbC = null;
            
            // error handling
        } catch (PDOException $error) {
            print "Erreur !: " . $error->getMessage() . "<br/>";
            die();
        }
        ?>
    </body>
