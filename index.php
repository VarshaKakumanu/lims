<?php
session_start();

if(isset($_SESSION["username"])){
	header("Location: home.php");
	}
?>

<head>
<style>

.container{
	width: 450px;
  height: 700px;
  margin:auto;
	margin-top: 0%;
	padding-top: 1px;
	
}

.login-page {
  width: 460px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  padding-top: 30px;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  background: #FFFFFF;
  max-width: 349px;
  margin: 10 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 lightblue, 0 5px 5px 0 lightblue;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  border-radius: 10px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #1d89e4;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  border-radius: 10px;
}
.form button:hover,.form button:active,.form button:focus {
  background: #1564c0;
}




/* .imgs{
	    margin-top: 0%;
	    margin-left: 38%;
		  weight: 20%;
		  height: 20%;
		
	
} */

.logo{
  height: 60px;
  padding: 30px;
}
</style>
<title>Login Page</title>
</head>

<div class="container">
	<div class="login-page">
	  <div class="form">
    <img class="imgs logo"  src="loginLogo.png" alt="Login Logo" >
		<form class="login-form" action="login.php" method="POST">
		  <input type="text" name="username" id="" placeholder="username"/>
		  <input type="password" name="password" id="" placeholder="password" />
		  <button>login</button>
		</form>
	  </div>
	</div>
</div>

<!-- new  -->
<!-- <head>
<link rel="stylesheet" href="style.css">
</head>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section> -->
