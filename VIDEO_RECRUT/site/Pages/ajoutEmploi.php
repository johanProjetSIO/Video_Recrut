<?php  include 'connectBd.inc.php';

$req = mysqli_query($link,"SELECT libelle FROM TYPE_DE_CONTRAT WHERE code = 1");

echo $req;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajouter un emploisvideo</title>
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>
  <body>
    <form class="" action="ajoutEmploiTraitement.php" method="post">
      <label for="">nom de l'emploi</label>
      <input type="text" name="libelleEmploi" value="">
      <label for=""> type de contrat</label>
      <input type="text" name="" value="">
      <label for="">description de l'emploi</label>
      <input type="text" name="description" value="">
      <label for="">compétence nécessaire</label>
      <input type="text" name="competence" value="">
      <?php $id = $_SESSION['idPersonne'] ;?>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <button type="submit" name="validé">validé</button>
    </form>
  </body>
</html>
