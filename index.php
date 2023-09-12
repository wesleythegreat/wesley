<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PC Parts Store</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/realeases/v5.6.3/css/all.css">
        <!-- css file need to call in head area-->
        <link rel="stylesheet" href="pcspecs.css">
<!---->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

   

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
 

    <body>
<?php require("lib/header.php"); ?>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
<div class="modal-dialog modal-login">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Member Login</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
<form action="/examples/actions/confirmation.php" method="post">
<div class="form-group">
<i class="fa fa-user"></i>
<input type="text" class="form-control" placeholder="Username" required="required">
</div>
<div class="form-group">
<i class="fa fa-lock"></i>
<input type="password" class="form-control" placeholder="Password" required="required">
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
</div>
</form>
</div>
<div class="modal-footer">
<a href="#">Forgot Password?</a>
</div>
</div>
</div>
</div>  
<div id="myModalreg" class="modal fade">
<div class="modal-dialog modal-login">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Registration</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
<form action="/examples/actions/confirmation.php" method="post">
<div class="form-group">
<i class="fa fa-user"></i>
<input type="text" class="form-control" placeholder="Username" required="required">
</div>
<div class="form-group">
<i class="fa fa-lock"></i>
<input type="password" class="form-control" placeholder="Password" required="required">
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
</div>
</form>
</div>
<div class="modal-footer">
<a href="#">Forgot Password?</a>
</div>
</div>
</div>
</div>

        <section>
            <!---->
            <div class="container"> <!-- class indicator na meron siya css file-->
                <br>
                <br>
                <br> 
                <br>
                <br> 
                <h1 class="heading">Pc Specs</h1>
                <div class="card-wrapper">
                  <!--1st card-->
                   <div class="card">
                        <img src="mousebg.png" alt="card background" class="card-img">
                        <img src="mousebg.png" alt="profile image" class="profile-img">
                        <h1>Computer Mouse</h1>
                        <p class="charPower">Pure gaming mouse</p>
                        <p class="about">
                            Prepare for unmatched performance and experience ultimate gaming mouse.
                        </p>
                        <a href="mouse.html" class="btn">Read More</a>
                        <br>
                        <br>
                   </div>
			      <!--2nd card-->
                   <div class="card">
                        <img src="keyboardbg.png" alt="card background" class="card-img">
                        <img src="keyboardbg.png" alt="profile image" class="profile-img">
                        <h1>keyboard</h1>
                        <p class="charPower">Mechanical keyboard</p>
                        <p class="about">
                            
 
                        </p>
                        <a href="keyboard.html" class="btn">Read More</a>
                        <br>
                        <br>
                   </div>
	              <!--3rd card-->
                   <div class="card">
                        <img src="monitorbg.png" alt="card background" class="card-img">
                        <img src="monitorbg.png" alt="profile image" class="profile-img">
                        <h1>monitor</h1>
                        <p class="charPower">High defenition monitor</p>
                        <p class="about">
                            
                        </p>
                        <a href="monitor.html" class="btn">Read More</a>
                        <br>
                        <br>
                   </div>

                   <!-- 4th card-->
                   <div class="card">
                        <img src="subg.jpg" alt="card background" class="card-img">
                        <img src="subg.jpg" alt="profile image" class="profile-img">
                        <h1>System Unit</h1>
                        <p class="charPower">Pure gaming experience</p>
                        <p class="about">
                            
                        </p>
                        <a href="systemunit.html" class="btn">Read More</a>
                        <br>
                        <br>
                   </div>
                   <!-- 5th card-->
                   <div class="card">
                        <img src="subg.jpg" alt="card background" class="card-img">
                        <img src="subg.jpg" alt="profile image" class="profile-img">
                        <h1>Accessories</h1>
                        <p class="charPower">Pure gaming experience</p>
                        <p class="about">
                            
                        </p>
                        <a href="accessories.html" class="btn">Read More</a>
                        <br>
                        <br>
                   </div>
                </div>
            </div>
        </section>
    </body>
</html>