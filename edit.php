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
       
        <?php
 include 'connection.php';
 if(!isset($_POST["submit"])){
     $sql="SELECT * FROM proiect WHERE id= '{$_GET['id']}'";
     $result=mysqli_query($con, $sql);
     $record=mysqli_fetch_array($result);
     
 }
 else{
     $sql1="UPDATE proiect SET nume='{$_POST['nume']}', parola='{$_POST['parola']}', utilizator='{$_POST['utilizator']}' WHERE id='{$_POST['id']}'";

     mysqli_query($con,$sql1) or die (mysqli_error($con));
     header('Location:administrareconturi.php');

 }
 ?>
        <section>   
        <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Editeaza una din urmatoarele:</span>
                                </h2>
   <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; margin-top: 10px; margin-left: 10px;">                                   
<form   method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Nume: <br> <input class="form-control"  type="text" name="nume" value="<?php echo $record['nume']; ?>"><br>
Parola: <br> <input class="form-control" type="text" name="parola" value="<?php echo $record['parola']; ?>"><br>
Tip utilizator: <br> <input class="form-control" type="text" name="utilizator" value="<?php echo $record['utilizator']; ?>"><br>
<input type="hidden" name="id" value="<?php echo $record['id']; ?>">
<input type="Submit" name="submit" value="Submit" class="btn btn-primary btn-outline">
</form>
   </div>
                                </div>
                            </div>
                        </div>
            </div>
            
        </section>
                                 
          
