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
     
        

    <section class="ftco-section contact-section" style="background-image: url(assets/img/laptopul-pentru-pisici.jpg)">
        <div class="container" >
        
            <div class="row block-9">
	            <div class="col-md-3"></div>
                    <div id="main-column" class="col-md-6 ftco-animate">
                      
                        <h2 class="section-heading text-uppercase">
                         <canvas class="section-heading text-uppercase" class="text-center" id="myCanvas" width='350' height='50' style="border:0.5px inset #000000;"></canvas>

<script>
  const canvas = document.getElementById("myCanvas");
  const ctx = canvas.getContext("2d");

  const svgString = "<svg height='100' width='400' xmlns='http://www.w3.org/2000/svg'><defs><filter id='f1' x='0' y='0'><feGaussianBlur in='SourceGraphic' stdDeviation='15' /></filter></defs><rect width='450' height='150' stroke='transparent' stroke-width='3' fill='orange' filter='url(#f1)' /><text fill='#ffffff' font-size='35' font-family='Open Sans' x='50' y='35' position='center' style='z-index: 1;'>Inregistraza-te</text></svg>";

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
                        <form id="register-form" method="POST" action="register.php" name="form1" onsubmit="return checkCaptcha();" class="contact-form">
                        	<script>
                                var captcha, cahrs;

                                function getNewCaptcha(){
                                    chars="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
                                    captcha = chars[Math.floor(Math.random()*chars.length)];
                                    for(var i=0;i<5;i++){
                                        captcha=captcha+chars[Math.floor(Math.random()*chars.length)];
                                    }
                                    form1.ct.value=captcha;
                                }

                                function checkCaptcha(){
                                    var check=document.getElementById("ci").value;
                                    if(captcha==check){
                                        return true;
                                    }
                                    else{
                                        alert("Invalid captcha");
                                        return false;
                                    }
                                }

                                getNewCaptcha();
                            </script>
                            <div class="form-group">
                                <input name="nume"  type="text" class="form-control" placeholder="Nume*" required>
                            </div>
                           
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Parola*" required>
                            <input class="notlong" type="text" id="cta" name="ct" value="####" readonly>
                            <input class="notlong" type="text" id="ci" placeholder="Captcha" style="width:30%;">
                            <input class="rfr" type="button" value="Refresh" id="refreshbtn" onclick="getNewCaptcha()"><br/>
                          
                                
                            <div class="form-group">
                            <button name="register-button"  class="btn btn-primary py-3 px-5" onclick="OnRegister();">Înregistrare</button>
                        </div>
                        </form>
                        
                        <a href="login.php">Ai deja un cont?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>