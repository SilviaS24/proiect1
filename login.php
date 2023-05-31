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
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
 
       <section class="contact" style="background-image: url(assets/img/laptopul-pentru-pisici.jpg)">
        <div class="container"  >
        
            <div class="row block-9">
	            <div class="col-md-3"></div>
                    <div class="col-md-6 ftco-animate">
                       
                        <?php
        session_start();
        include('connection.php');
        if(isset($_COOKIE['nume']) && isset($_COOKIE['password']))
        {
          $username = $_COOKIE['nume'];
          $password = $_COOKIE['password'];
        }
        else
        {
          $username = "";
          $password ="";
        }
        if(isset($_REQUEST['login']))
        {
          $user = $_REQUEST['nume'];
          $pass = $_REQUEST['password'];
          $select_query = mysqli_query($con,"SELECT * FROM proiect WHERE nume='$user' and parola='$pass'");
          $res = mysqli_num_rows($select_query);
          if($res>0)
          {
            $data = mysqli_fetch_array($select_query);
            $name = $data['nume'];
            $admin=$data['utilizator'];
            $_SESSION['nume'] = $name;
            $_SESSION['ADMIN']=$admin;
            if(isset($_REQUEST['remind-me']))
            {
              setcookie('nume',$_REQUEST['nume'],time()+60*60);//1 hour
              setcookie('password',$_REQUEST['password'],time()+60*60); //1 hour
            }
            else
            {
              setcookie('nume',$_REQUEST['nume'],time()-10);//10 seconds
              setcookie('password',$_REQUEST['password'],time()-10); //10 seconds
            }
            header('location:index.php');
          }
          else
          {
            $msg = "Please enter valid Emailid or Password.";
          }
        }
        ?>
                        
                        <h2 class="section-heading text-uppercase">
                         <canvas class="section-heading text-uppercase" class="text-center" id="myCanvas" width='350' height='50' style="border:0.5px inset #000000;"></canvas>

<script>
  const canvas = document.getElementById("myCanvas");
  const ctx = canvas.getContext("2d");

  const svgString = "<svg height='100' width='400' xmlns='http://www.w3.org/2000/svg'><defs><filter id='f1' x='0' y='0'><feGaussianBlur in='SourceGraphic' stdDeviation='15' /></filter></defs><rect width='450' height='150' stroke='transparent' stroke-width='3' fill='orange' filter='url(#f1)' /><text fill='#ffffff' font-size='35' font-family='Open Sans' x='50' y='35' position='center' style='z-index: 1;'>Conecteaza-te</text></svg>";

  const DOMURL = window.URL || window.webkitURL || window;
  const img = new Image();
  const svg = new Blob([svgString], {type: 'image/svg+xml'});
  const url = DOMURL.createObjectURL(svg);

  img.onload = function() {
    ctx.drawImage(img, 0, 0);
    DOMURL.revokeObjectURL(url);
  }
  img.src = url;
</script>
                    </h2>
                        <form method="POST"  class="contact-form">
                            <div class="form-group">
                                <input name="nume" type="text" class="form-control" placeholder="Nume*" required>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Parola*" required>
                            </div>
                            <div class="form-check mb-4">
                                <input name="remind-me" type="checkbox" class="form-check-input" id="remind-me">
                                <label class="form-check-label" for="remind-me">Ține-mă minte</label>
                            </div>
                            <div class="form-group">
                                <input name="login" type="submit" value="Autentificare" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                        <a href="registerform.php">Nu ai cont? Înregistrează-te acum!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
