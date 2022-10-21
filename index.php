<?php
   include 'db.php';
   if(isset($_SESSION['id'])) header("location:game.php");
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration Form in HTML</title>
      <link rel="stylesheet" href="asset/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="login_body">
          
      </div>

      <div class="wrapper">
        <div class="title-text">
           <div class="title login">
              Login Form
           </div>
           <div class="title signup">
              Signup Form
           </div>
        </div>
        <div class="form-container">
           <div class="slide-controls">
              <input type="radio" name="slide" id="login" checked>
              <input type="radio" name="slide" id="signup">
              <label for="login" class="slide login">Login</label>
              <label for="signup" class="slide signup">Signup</label>
              <div class="slider-tab"></div>
           </div>
           <div class="form-inner">
              <form action="#" class="login" id="LoginForm">
                 <div class="field">
                    <input id="usn" autocomplete="off" type="text" name="Login_username" placeholder="username" >
                 </div>
                 <div class="field">
                    <input autocomplete="off" type="password" name ="login_password" placeholder="Password"  >
                 </div>
                 <div class="pass-link">
                    <a href="#">Forgot password?</a>
                 </div>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Login">
                 </div>
                 <div class="signup-link">
                    Not a member? <a href="">Signup now</a>
                 </div>
              </form>
              <form action="#" class="signup" id="SIGNUPFORM">
                 <div class="field">
                    <input autocomplete="off" type="text" name="fullname" placeholder="fullname" >
                 </div>
                 <div class="field">
                    <input autocomplete="off" type="text" name="username" placeholder="username" >
                 </div>
                 <div class="field">
                    <input autocomplete="off" type="password" name="password" placeholder="Password" >
                 </div>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Signup">
                 </div>
              </form>
           </div>
        </div>
     </div>
<footer>
	<p>
		Developed by
		<a href="">HanaA</a>
	</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.all.min.js"></script>
      <script src="js/sweetalert2.all.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="asset/kode.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </body>
</html>