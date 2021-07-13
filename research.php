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
                echo'<section>';
                echo '<h2>'.$r['titre'].'<span class="d-block">('.$r['annee'].'-'.$r['genre'].')</span></h2> 
                <h3> de '.$r['interprete'].'</h3>';
                echo'</section>';
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
