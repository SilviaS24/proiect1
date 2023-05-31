
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
      
         <link href="css/style.css" rel="stylesheet" />
         <link href="css/styles_1.css" rel="stylesheet" />
    </head>
    <body >
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
                                       echo '<li><a class="dropdown-item" href="adminstrareservicii.php" >Adm_servicii</a></li>';
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
        
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 400px; margin-left: 100px;">
    <table style="border-collapse: collapse; width: 80%;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 10px;">ID</th>
                <th style="border: 1px solid black; padding: 10px;">Nume serviciu</th>
                <th style="border: 1px solid black; padding: 10px;">Imagine</th>
                <th style="border: 1px solid black; padding: 10px;">Pret</th>
                <th style="border: 1px solid black; padding: 10px;">Acțiuni</th>
                <th style="border: 1px solid black; padding: 10px;">Incarca</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($con, "SELECT * FROM servicii");
            $result2 = mysqli_query($con, "SELECT * FROM servicii");
            $nr=0;
            $nr2=0;
            while ($row = mysqli_fetch_array($result)) {
                $nr++;
            }
            
               
    while ($row = mysqli_fetch_array($result2)) {
                echo "<tr>";
                    echo "<td> " . $row['id'] . "</td>";
                    echo "<td>" . $row['nume'] . "</td>";
                    echo "<td> <img style='width:50px; height:50px;' src=".$row['imagine']."></td>";
                    echo "<td>" . $row['pret'] . "</td>";
                    echo "<td><a href=\"edit-image.php?id=".$row['id']."\">Editati</a>
              
                    <a href=\"delete-image.php?id=".$row['id']."\">Stergeti</a></td>";
                    $nr2++;
                    if($nr%2==1){
                    if($nr2==(int)($nr/2)+1)
                        echo "<td><a href=\"upload.php?id=".$row['id']."\">Incarcati</a></td>";
                    else
                        echo "<td></td>";
                    }
                    else{
                        if($nr2==(int)($nr/2))
                        echo "<td><a href=\"upload.php?id=".$row['id']."\">Incarcati</a></td>";
                    else
                        echo "<td></td>";
                    }
                    }
                    if($nr==0){
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td><a href=\"upload.php?id=".$row['id']."\">Incarcati</a></td>";
                    }
                echo '</tr>';
                    ?>
        </tbody>
    </table>
</div>
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