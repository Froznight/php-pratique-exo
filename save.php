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
            if($_GET['action']=='insert'){
                //Complaiting ? whit array values
                $sQ = $dbc->prepare("INSERT INTO morceau SET titre=?,interprete=?,genre=?,annee=?;" );
                //excute la request
                $sQ->execute(array($_POST['titre'],$_POST['intret'],$_POST['genre'],$_POST['annee']));
            }
            if($_GET['action']=='edit'){
                //Complaiting ? whit array values
                $sQ = $dbc->prepare("UPDATE INTO morceau SET titre=?,interprete=?,genre=?,annee=? WHERE id_morceau;" );
                //excute la request
                $sQ->execute(array($_POST['titre'],$_POST['intret'],$_POST['genre'],$_POST['annee'],$_POST['id']));
            }
            if($_GET['action']=='delet'){
                //Complaiting ? whit array values
                $sQ = $dbc->prepare("DELETE FROM morceau WHERE id_morceau=?" );
                //excute la request
                $sQ->execute(array($_POST['id']));
            }
            // logout to morceau DB
            $dbC = null;

            // error handling
        } catch (PDOException $error) {
            print "Erreur !: " . $error->getMessage() . "<br/>";
            die();
        }
        echo'<h2 class="d-block p-5 fs-3"> Le titre = '.$_POST['titre'].'</h2>
        <h2 class="d-block p-5 fs-3"> L\'interpret = '.$_POST['intret'].'</h2>
        <h2 class="d-block p-5 fs-3"> Le genre = '.$_POST['genre'].'</h2>
        <h2 class="d-block p-5 fs-3"> L\' année = '.$_POST['annee'].'</h2>';
        ?>
    </body>
