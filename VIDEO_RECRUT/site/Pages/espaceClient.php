<!DOCTYPE HTML>
<!--
    Full Motion by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include '../connectBd.inc.php';
session_start()?>

<?php
    $langue = 'francais';
    if(isset($_GET['langue']))
      $langue = $_GET['langue'];
    include '../langue/'.$langue.'.php'; ?>


<html>
    <head>
        <title>video_recrut</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/main.css" />
    </head>

    <!--Langue-->
    <form class="" action="" method="get">
    <select class="" name="langue">
      <option value="francais">francais</option>
      <option value="anglais">anglais</option>
    </select>
    <input type="submit" name="" value="<?php echo $tab[15]; ?>">
      <br></br><a href="deco.php" class="button"><?php echo $tab[17]; ?></a>
  </form>


    <body id="top">

      <?php if($_SESSION['connect']){ ?>
      <section id="banner" data-video="../images/banner">
        <!-- Header -->
			<header id="header" class="alt">
        <h1 style="color:white;"><?php echo $tab[16]; echo" ";  echo $_SESSION['prenom']." ".$_SESSION['nom'];?> </h1>
			</header>

    </section>



                      <?php
                        $idP = $_SESSION['id'];
                        $req_session = mysqli_query($link,"SELECT idPersonne FROM RH WHERE idPersonne ='".$idP."'");
                        $droit = mysqli_fetch_assoc($req_session);

                        if($droit['idPersonne'] == $idP && $idP != NULL ){
                        ?>
                            <li1><b><a href="ajoutEmploi.php?langue=<?php echo $langue;?>"><?php echo $tab[19]; ?></a></b></li1>
                            <li1><b><a href="liste.php?langue=<?php echo $langue;?>"><?php echo $tab[20]; ?></a></b></li1>

                        <?php
                      }
                         ?>




            <!-- Banner -->
            <!--
                To use a video as your background, set data-video to the name of your video without
                its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
                formats to work correctly.
            -->


                <div id="main">

                    <div class="inner">

                    <!-- Boxes -->
                        <div class="thumbnails">

                            <?php
                            $reponse = mysqli_query($link, "SELECT e.libelle, tc.libelle, e.description FROM TYPE_DE_CONTRAT tc INNER JOIN EMPLOI e ON tc.code = e.code ");



                              ?>


                                <!-- <img src="images/pic01.jpg" alt="" /></a> -->
                                <?php     while ($value =  mysqli_fetch_row($reponse)) {?>




                                   <div class="box">
                                    <div class="inner">
                                    <h3><?php echo $value[0];?></h3>
                                    <p><?php echo $value[1];?></p>
                                    <p><?php echo $value[2];?></p>
                                  </div>
                                  <a href="postuler.php?id=<?php echo $value[0];?>& type=<?php echo $value[1]?>& description=<?php echo $value[2]?> & langue=<?php echo $langue;?>" class="button" >Postuler</a>
                                  </div>


                                  <p><?php echo $value[3];?></p>
                                 <?php  } ?>


                        </div>

                    </div>
                </div>

            <!-- Footer -->
                <footer id="footer">
                    <div class="inner">
                        <h2>CONTACTEZ-NOUS</h2>
                        <p>061548795  ou   videoRecrut@yep.com </p>





                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                        </ul>
                    </div>
                </footer>

                <?php } ?>


<<<<<<< HEAD
      <?php } ?>
      <form class="" action="" method="get">
        <select class="" name="langue">
          <option value="francais">francais</option>
          <option value="anglais">anglais</option>
        </select>
        <input type="submit" name="" value="<?php echo $tab[15]; ?>">
      </form>

=======
        <!-- Scripts -->
>>>>>>> 52262d61357c1e313b506e317a73041dd9f99dac
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
