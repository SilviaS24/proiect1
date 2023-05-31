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
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img  width="95" height="600" src="assets/img/logo_warriorcat.png" alt="..." /></a>
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
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                
                <div class="masthead-heading text-uppercase">Bine ai venit! </div>
                <div class="masthead-subheading">Suntem aici pentru tine si nevoiele animalutului tau!</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="despre_noi.php">Afla despre noi</a>
            </div>
        </header>
        <!-- Services-->
        
        <!-- Portfolio Grid-->
        
        <!-- About-->
        
        <!-- Team-->
        
       
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                      <p>Nu uita sa ne urmaresti si sa ne apreciezi </p>
           <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v16.0" nonce="Pwix8BSv"></script>
<ul class="social-icon">
     <li class="ftco-animate">
        <div class="fb-share-button" data-href="https://www.uaic.ro" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fyourwebsite.com%2Fyourpage.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    </li>
    <li class="ftco-animate">
        <div class="fb-like" data-href="https://www.uaic.ro" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
    </li>
   
</ul>            
                    
                    
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
