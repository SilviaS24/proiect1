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
<html>
    <head></head>
    <body>
       <header ">
            <div id="content">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-white">
                        <h1 class="display-4 fw-bolder">Incarcati o intrare</h1>
                        <form method="post" action="save.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <div>
                                Nume seviciu:<textarea class="form-control" style="width: 40%; height:20px; margin-left: auto; margin-right: auto;" name="nume"></textarea> 
                            </div>
                            <br/>
                            <div>
                                Imagine:<input class="form-control" style="width: 40%; margin-left: auto; margin-right: auto;" type="file" name="image"> 
                                Pret:<textarea class="form-control" style="width: 40%; height:20px; margin-left: auto; margin-right: auto;" name="pret"></textarea> 
                            </div>
                            <br/>
                            <div>
                                <input class="btn btn-primary btn-outline" type="submit" name="upload" value="Incarcati">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>