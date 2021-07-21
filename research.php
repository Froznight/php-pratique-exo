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
            $s = $dbc->prepare("SELECT * FROM morceau WHERE titre LIKE '%".$_POST['research']."%'");

            $s->execute();
            
            while($r= $s->fetch()){
                echo '<p>';
                echo '<a href="modifier.php?choix=formulaire&id='.$r['id_morceau'].'">'.$r['titre'].'
                <span>('.$r['annee'].'-'.$r['genre'].'-'.$r['interprete'].')</span></a>';
                echo '- <a href="./supprimer.php?choix=formulaire&id='.$r['id_morceau'].'">Supprimer</a>';
                echo '<p>';
            };

             //logout to morceau DB
             $dbC = null;
            // error handling

        } catch (PDOException $error) {
            print "Erreur !: " . $error->getMessage() . "<br/>";
            die();
        }
        ?>
    </body>
