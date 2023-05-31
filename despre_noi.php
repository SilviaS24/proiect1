<?php
include 'connection.php';
session_start();
if(isset($_COOKIE['nume']) && !isset($_SESSION['nume']))
{
	$_SESSION['nume'] = $_COOKIE['nume'];
}
if(isset($_SESSION['nume'])){
    $sql="SELECT * FROM proiect WHERE nume='{$_SESSION['nume']}'";
    $query=mysqli_query($con,$sql) or die(mysqli_query($con));
    $record=mysqli_fetch_array($query);
    $pos=$record['utilizator'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WarriorCat</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
         <script src="js/script1.js"></script>
        <script src="js/script2.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles_1.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                               <li class="nav-item"><a class="nav-link" href="index.php">Acasa</a></li>
                        <li class="nav-item"><a class="nav-link" href="despre_noi.php">Despre noi</a></li>
                           <li class="nav-item"><a class="nav-link" href="clinica.php">Clinica</a></li>
                          <li class="nav-item"><a class="nav-link" href="servicii.php">Sevicii</a></li>
                          
                        <?php 
                        if(isset($_SESSION['nume'])){
                        echo '<li class="nav-item dropdown">';
                            echo '<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >'.$_SESSION["nume"].'</a>';
                            echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                                
                                if(isset($_SESSION['nume'])){
                                    if($pos == 'admin' ){
                                       echo '<li><a class="dropdown-item" href="administrareconturi.php">Adm_conturi</a></li>';
                                       echo '<li><a class="dropdown-item" href="administrareservicii.php" >Adm_servicii</a></li>';
                                       echo '<li><hr class="dropdown-divider" /></li>';
                                         }
                                }
                                
                                //echo '<li><hr class="dropdown-divider" /></li>';
                                echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
                            echo '</ul>';
                        echo '</li>';
                        }
                        else{
                            echo '<a class="nav-link" href="login.php">Login</a>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/pisi1.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Despre noi</span>
                            
                        </h2>
                        <p class="mb-3">Clinica noastră veterinară, numită "WarriorCat", este specializată în îngrijirea pisicilor și în asigurarea unei experiențe confortabile și plăcute pentru acestea. Echipa noastră este formată din medici veterinari dedicați, asistenți veterinari calificați și personal de suport pasionat de bunăstarea animalelor.</p>
                        <audio controls>
                     <source src="multimedia/vet.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
                        <div class="intro-button mx-auto"> <a class="btn btn-primary btn-xl text-uppercase" href="clinica.php">Afla despre clinica</a></div>
                    </div>
                </div>
            </div>
        </section>
    
     <section>   
        <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Afla mai multe despre scopul nostru</span>
                                    <span class="section-heading-lower">Urmareste aceste videouri:</span>
                                </h2>
                
                <iframe  width="420" height="305"
src="multimedia/pisi.mp4">
</iframe>
               <iframe width="400" height="300" src="https://www.youtube.com/embed/Csg3hnuppz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
 
                                
  </section>                              
 <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
