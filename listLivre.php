<?php

include('includes/database.inc.php');

$prepexec=$db->prepare('SELECT * FROM `livre` INNER JOIN `auteur` ON livre.id_auteur = auteur.id_auteur');
$prepexec->execute();
$tousLesLivres = $prepexec->fetchAll();
?>


<!DOCTYPE html>
<html>
    <head>

    </head>
<body>
    <header>
        <?php include_once('view/header.php');?>
    </header>
<table>
    <thead>
        <th>Titre</th>
        <th>Auteur</th>
    </thead>
    <tbody>
        <?php
        foreach($tousLesLivres as $livre){
            ?>
            <tr>
                <td><?php echo $livre['titre'] ?></td>
                <td><?php echo $livre['nom'] ?></td>
                <td><a href="details.php?id=<?= $livre['titre'] ?>">Voir</a><a href="delete.php?id=<?= $produit['id'] ?>">Supprimer</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>