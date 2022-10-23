<?php

include('includes/database.inc.php');

$prepexec=$db->prepare('SELECT * FROM `livre`');
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
        <th>Quel livre souhaitez supprimer ?</th>
    </thead>
    <tbody>
        <?php
        foreach($tousLesLivres as $livre){
            ?>
            <tr>
                <td><?php echo $livre['titre'] ?></td>
                <td><a href="listeAuteur.php"></a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>