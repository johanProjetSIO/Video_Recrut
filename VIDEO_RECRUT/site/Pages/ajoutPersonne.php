<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/main.css"/>
    <title></title>
  </head>
  <body id = "top">
    <?php
    include '../connectBd.inc.php';
      $nom = $_POST['nom'];
      $Prenom = $_POST['prenom'];
      $numeroTel = $_POST['tel'];
      $loginPersonne = $_POST['identifiant'];
      $motDePasse = $_POST['mdp'];
                  $query = "INSERT INTO PERSONNE(nom, Prenom, numeroTel, loginPersonne, motDePasse)
                            VALUES ('$nom','$Prenom','$numeroTel','$loginPersonne','$motDePasse')";
                  $res = mysqli_query($link,$query);

                  $req = "INSERT INTO CANDIDAT(nom, Prenom, numeroTel, loginPersonne, motDePasse)
                  VALUES ('$nom','$Prenom','$numeroTel','$loginPersonne','$motDePasse')";
                  $re = mysqli_query($link,$req);
      if($res){
        echo "votre compte est bien creé";
      }else {
        echo "la création a echoué";
      }
     ?>
     <br></br><a href="../index.php" class="button">Retour</a>
  </body>
</html>
