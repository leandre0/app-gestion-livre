<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Index</title>

</head>
<body>
<?php include 'includes/database.inc.php';?>

<form method="post" action="actions/inscrire.php" class="formulaire_inscription">
            <p>
                <input type="VARCHAR(50)" placeholder="Pseudo" size="50" class="champs_de_texte" name="pseudo_user_add">
            </p>
            <p>
                <input type="VARCHAR(50)" placeholder="Titre" size="50" class="champs_de_texte" name="titre_add">
            </p>
            <p>
                <input type="VARCHAR(500)" placeholder="Synopsis" size="50" class="champs_de_texte" name="synopsis_add">
            </p>
            <p>
                <input type="VARCHAR(50)" placeholder="Auteur" size="50" class="champs_de_texte" name="auteur_add">
            </p>
            <p class="bouton">
                <input type="submit" value="Ajouter" size="25" class="bouton_ajout">
            </p>
        </form>
</body>
</html>

<?php
   if ( isset( $_POST['submit'] ) ) {
      $pseudo_user_add = $_POST['pseudo_user_add'];
      $titre_add = $_POST['titre_add'];
      $synopsis_add = $_POST['synopsis_add'];
      $auteur_add = $_POST['auteur_add'];
      $prepexec=$db->prepare('INSERT INTO `livre` (`titre`, `synopsis`, `auteur`) VALUES (:titre_add, :synopsis_add, :auteur_add);');
      $prepexec->execute();
      $tousLesLivres = $prepexec->fetchAll();
  }
?>