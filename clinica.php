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
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">WarriorCat</span>
                                <span class="section-heading-lower">Programul nostru</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Luni
                                    <span class="ms-auto">7:00-19:00</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Marti
                                    <span class="ms-auto">7:00-19:00</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Miercuri
                                    <span class="ms-auto">7:00-19:00</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Joi
                                    <span class="ms-auto">7:00-19:00</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Vineri
                                    <span class="ms-auto">7:00-19:00</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Sambata
                                    <span class="ms-auto">Doar urgente</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Duminica
                                    <span class="ms-auto">Doar urgente</span>
                                </li>
                                 
                            </ul>
                             <div class="row text-center">
                    <div >
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-map fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Unde ne gasesti</h4>
  
                         <div class="center">
        <iframe  width="420" height="305" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1123.960934736053!2d27.57067318601815!3d47.174312903442456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20%E2%80%9EAlexandru%20Ioan%20Cuza%E2%80%9D%20din%20Ia%C8%99i!5e0!3m2!1sro!2sro!4v1677825568722!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br/><br/>
                    </div>
                            <p class="mb-0">
                                <small><em>Suna oricand</em></small>
                                <br />
                                (317) 585-8468
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">WarriorCat</span>
                                <span class="section-heading-lower">Angajatii nostri</span>
                            </h2>
                           
                            <p>Echipa noastră este formată din medici veterinari dedicați, asistenți veterinari calificați și personal de suport pasionat de bunăstarea animalelor.</p>
                            <?php

class angajat
{
    public $nume;
    public $prenume;
    public $show;
   public $nr;
   public function set_nr($var)
    {
        $this->nr = $var;
    }
    public function set_nume($var)
    {
        $this->nume = $var;
    }

    public function set_prenume($var)
    {
        $this->prenume = $var;
    }

    public function get_nume()
    {
        $this->show = $this->nume." ".$this->prenume." : ".$this->nr;
    }

    public function show()
    {
        return $this->show;
    }
}
class medic extends  angajat{
    public $vechime;
    public function set_vechime($var)
    {
        $this->vechime = $var;
    }
    public function show()
    {
        return $this->show." (".$this->vechime.")";
    }

}
$a1 = new angajat();
$a2 = new angajat();
$b1 = new medic();
$b2 = new medic();
$a1->set_nume("Popescu");
$a1->set_prenume("Bogdan");
$a1->set_nr("0765261436");
$a1->get_nume();
echo '<strong>' . $a1->show() . '</strong><br/>';
$a2->set_nume("Popescu");
$a2->set_prenume("Maria");
$a2->set_nr("0765261436");
$a2->get_nume();
echo '<strong>' . $a2->show() . '</strong><br/>';
$b1->set_nume(" Dr.Ionescu");
$b2->set_prenume("Ion");
$b1->set_nr("0765265436");
$b1->set_vechime("-specialist in chirurgie veterinară");
$b1->get_nume();
echo '<strong>' . $b1->show() . '</strong><br/>';
$b2->set_nume(" Dr.Georgescu");
$b2->set_prenume("Ioana");
$b2->set_nr("0765265436");
$b2->set_vechime("-medic veterinar cu 10 ani de experiență în îngrijirea pisicilor");
$b2->get_nume();
echo '<strong>' . $b2->show() . '</strong><br/>';
?>
                                
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section>   
        <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                              <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-hospital fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Serviciile noastre</h4>
                        <a class="btn btn-primary btn-xl text-uppercase" href="servicii.php">Afla mai multe</a>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Fa si tu parte din comunitatea noastra</h4>
                        <a class="btn btn-primary btn-xl text-uppercase" href="registerform.php">Inregistreaza-te</a>
                    </div>
                      <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-check fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Ai deja cont?</h4>
                        <a class="btn btn-primary btn-xl text-uppercase" href="login.php">Logheaza-te</a>
                      </div>            
                                  </div>
                                </div>
                            </div>
                        </div>
                                
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
