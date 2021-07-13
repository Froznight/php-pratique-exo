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
    // check of good excut of sql connect and request 
    try {
        $dbc = new PDO('mysql:host=localhost;dbname=musique', $user,$passe);

        /*$dbh->query("INSERT INTO morceau (`id_morceau`, `titre`, `interprete`,`genre`, `annee`) 
        VALUES (NULL, '".$_POST['titre']."', '".$_POST['intret']. "', '".$_POST['genre']."', '".$_POST['annee']."');");
        */

        // Requeste to save on DB 
        //  $dbc->query("INSERT INTO morceau SET titre='".$_POST['titre']."'
        // ,interprete='".$_POST['intret']."'
        // ,genre='".$_POST['genre']."',annee='".$_POST['annee']."';" );
        
        //Complaiting ? whit array values
        $sQ = $dbc->prepare("INSERT INTO morceau SET titre=?,interprete=?,genre=?,annee=?;" );
        //excute la request
        $sQ->execute(array($_POST['titre'],$_POST['intret'],$_POST['genre'],$_POST['annee']));

        // logout to morceau DB
        $dbC = null;
        
        // error handling
    } catch (PDOException $error) {
        print "Erreur !: " . $error->getMessage() . "<br/>";
        die();
    }
    ?>
</body>