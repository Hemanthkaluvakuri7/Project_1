<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head><title> Sign in page </title></head>
<link rel="stylesheet" type="text/css" href="../css/signinstyle.css">
<link rel="stylesheet" type="text/css" href="../css/navstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
<nav class="navbar navbar-light bg-light">
<a class="navbar-brand" href="#">
<img src="../images/Menu.png" width="30" height="30" alt="">
</a>
<ul class="nav-links">
<li class="nav-item"><a role="nav-button" href="#">CONTACT US</a></li>
<li class="nav-item"><a role="nav-button" href="../../index.php">LR</a></li>
<li class="nav-item"><a role="nav-button" href="./checkavail.php">BOOK NOW</a></li> <li class="nav-item nav-right"><a role="nav-button" href="#">
<img src="../images/User.png" width="30" height="30" alt=""> </a></li>
</ul> </nav>
<div class="signheader">
<img id="img" src="../images/signinbar.png" alt="group"> </div>
<div class="container-fluid"> <div class="container">
<div class="row">
<div class="col-md-5">
<form role="signinform" method="post" action="confirmation.php"> <fieldset>
<p> Sign into your Existing account here</p> <div class="form-group">
Username
<input type="email" name="username" id="username" class="form-control input-lg"
placeholder="John Doe"> </div>
<div class="form-group">
Password
<input type="password" name="password" id="password" class="form-control input-lg"
placeholder="........"> </div>
<div class="verticalalign">
<button class="button"><span>SIGN IN </span></button>
</div>
<br>
<div class="continue">
<p></p>Continue as Guest User <input type="checkbox" /> </div>
</fieldset> </form>
</div>
<div class="col-md-2"> </div>
<div class="col-md-5">
<form role="signupform" method="post" action="confirmation.php"> <fieldset>
<p> Register here</p> <div class="form-group">
Username
<input type="text" name="username" id="username" class="form-control input-lg"
placeholder="John Doe"> </div>
<div class="form-group">
Email Address
<input type="email" name="email" id="email" class="form-control input-lg"
placeholder="John.Doe@gmail.com"> </div>
<div class="form-group">
Password
<input type="password" name="password" id="password" class="form-control input-lg"
placeholder="........"> </div>
<div class="form-group">

Repeat Password
<input type="password" name="repeatpassword" id="repeatpassword"
class="form-control input-lg" placeholder="........"> </div>
<div class="verticalalign">
<button class="button"><span>SIGN UP</span></button>
</div> </fieldset>
</form> </div>
</div> </div>
</body> </html>