<?php

include('includes/database.inc.php');
include_once 'view/header.php';

$prepexec=$db->prepare('SELECT * FROM `livre` INNER JOIN `auteur` ON livre.id_auteur = auteur.id_auteur');
$prepexec->execute();
$tousLesLivres = $prepexec->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Index</title>

</head>
<body>
    <h1>Vos modifications</h1>
    <table>
    <nav>
        <ul>
        <?php
        foreach($tousLesLivres as $livre){
            ?>
            <tr>
                <td><?php echo $livre['titre'] ?></td>
                <td><?php echo $livre['nom'] ?></td>
                <td><a href="listeAuteur.php">Voir</a><a href="delete.php">Supprimer</a></td>
            </tr>
            <?php
        }
        ?>
        </ul>
    </nav>
</table>

</body>
</html>
