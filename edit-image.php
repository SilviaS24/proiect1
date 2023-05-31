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
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
<?php
include 'connection.php';


    if(isset($_GET['id']))
         $sql = "SELECT * FROM servicii WHERE id = '{$_GET['id']}'";
    else
         $sql = "SELECT * FROM servicii WHERE id = '{$_POST['id']}'";
    $result = mysqli_query($con, $sql);
    $record = mysqli_fetch_array($result);
    if(isset($_POST['submit']))
    { $nume = $_POST['nume'];
    $pret = $_POST['pret'];
 

    
    if ($_FILES['image']['size'] > 0) {
        $target = "./assets/img/" . basename($_FILES['imagine']['name']);
        move_uploaded_file($_FILES['imagine']['tmp_name'], $target);
    } else {
        $target = $record['imagine'];
        
    }

    $sql1 = "UPDATE servicii SET nume='$nume', imagine='$target', pret='$pret' WHERE id = '{$_POST['id']}'";
    mysqli_query($con, $sql1) or die(mysqli_error($con));
    header("location: administrareservicii.php");

    }
?>

<div class="row">
    <div class="col-md-8 fh5co-heading animate-box">
        <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
            <h2 style="display: flex; justify-content: center; margin-top: 10px">Editati imaginea</h2>
        </div>

     <div style="display: flex; justify-content: center; flex-direction: column; margin-top: 40px; margin-left: 100px; border: 5px solid black; padding: 20px; font-weight: bold; font-size: 18px; font-family: Arial, sans-serif;">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        Nume: <br> <input class="form-control" type="text" name="nume" value="<?php echo $record['nume']; ?>"><br>
        Imagine:<br><input type="file" name="image" value="<?php echo $record['imagine']; ?>"><br>
        <?php if (!empty($record['imagine'])): ?>
            <img src="<?php echo $record['imagine']; ?>" alt="Current Image" width="200"><br>
        <?php endif; ?>
        Pret: <br> <input class="form-control" type="text" name="pret" value="<?php echo $record['pret']; ?>"><br>

        <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-outline">
    </form>
</div>

    </div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>