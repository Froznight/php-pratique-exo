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
   <H1>Supprimer</H1>
   <?php
    // var for connect to my Data base
    $user = "root";
    $passe = "root";
    try {
    //connect to datas base 
    $dbc = new PDO('mysql:host=localhost;dbname=musique', $user,$passe);
   
    // check of good excut of sql connect and request 
    // error handling
   } catch (PDOException $error) {
       print "Erreur !: " . $error->getMessage() . "<br/>";
       die();
   }   

    switch($_GET['choix']){
        default:
                //We retrieve all the contents of the chunks database and we sort the results by next year
                $sQ = $dbc->query("SELECT * From morceau Order by annee desc");
                //We all display the return table
                while($r=$sQ->fetch()){
                    echo '<p>';
                    echo '<a href="supprimer.php?choix=formulaire&id='.$r['id_morceau'].'">'.$r['titre'].'<span>('.$r['annee'].'-'.$r['genre'].'-'.$r['interprete'].')</span></a>';
                    echo '<p>';
                } 
                break;
        ?>
        <a href="./modifier.php?choix=formulaire">Aller au formulaire</a>
        <?php
        case 'formulaire':
            echo '<h2> Les donnée a supprimer</h2>';

            //prepare resquest sql for to retrieve all the data link to the id pass in gette
            $sQ=$dbc->prepare("SELECT * FROM morceau WHERE id_morceau=?");
            $sQ->execute(array($_GET['id']));
            //creat new object which contains the query results table
            $r = $sQ->fetch();
        ?>
        <!-- call form for draw datas -->
        <form action="./save.php?action=delet" method="POST" class="p-5">
        <input type="HIDDEN" name="id" value=<?php echo $r['id_morceau'];?>>
        <div class="mb-3">
          <label for="title" class="form-label">Titre de la musique</label>
          <input type="text" class="form-control" id="title" name="titre" value="<?php echo$r['titre']?>">
        </div>
        <div class="mb-3">
          <label for="intret" class="form-label">Interpret</label>
          <input type="text" class="form-control" id="intret" name="intret" value="<?php echo$r['interprete']?>">
        </div>
        <div class="mb-3">
          <label for="genre" class="form-label">Genre</label>
          <input type="text" class="form-control" id="genre" name="genre" value="<?php echo$r['genre']?>">
        </div>
        <div class="mb-3">
          <label for="annee" class="form-label">Année</label>
          <input type="id" class="form-control" id="annee" name="annee" value="<?php echo$r['annee']?>">
        </div>
        <button type="submit" class="btn btn-primary">Supprimer ces données</button>
      </form>
        <?php
        break;
        }
        ?>

</body>
</html>