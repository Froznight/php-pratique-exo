<?php
$titre="confiramtion de la sauvegarde";
include("./include/header.php");

?>
<body>
    <?php
    include("./include/menu.php");
    // connect to my Data base
    $user = "root";
    $passe = "root";
    try {
        $dbc = new PDO('mysql:host=localhost;dbname=musique', $user,$passe);

        /*$dbh->query("INSERT INTO morceau (`id_morceau`, `titre`, `interprete`,`genre`, `annee`) 
        VALUES (NULL, '".$_POST['titre']."', '".$_POST['intret']. "', '".$_POST['genre']."', '".$_POST['annee']."');");
        */

        // Requeste to save on DB 
         $dbc->query("INSERT INTO morceau SET titre='".$_POST['titre']."'
        ,interprete='".$_POST['intret']."'
        ,genre='".$_POST['genre']."',annee='".$_POST['annee']."';" );

        // logout to morceau DB
        $dbC = null;
        
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>
</body>