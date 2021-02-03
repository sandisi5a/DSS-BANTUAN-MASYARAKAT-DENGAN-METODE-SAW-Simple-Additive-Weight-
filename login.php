<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

 <div id="container">
            <header>
                <h1><a>Aplikasi Pemilihan Warga Penerima Bantuan Dana</a></h1>
            </header>
            <!--menu -->
            <nav>
                <ul>
                    <li>
                        
                    </li>
                    <li><a href="#">Login</a>
                        
                    </li>
                </ul>
            </nav>


<div class="container">

<style type="text/css">

  .kotak{
    background-color: lightgrey;
    box-shadow: 5px 5px 5px rgba(0,0,0,.75);
border-radius: 20px;
width : 350px;
height: 300px;
margin: 50px auto;
padding-bottom: 50px;
padding-top: 50px;
  }
.form-control{
  width: 300px;
  margin: auto;
}
.btn{
width: 150px;
  margin: auto;
}
.gam{
    width:100px;
    width: 75px;
    margin-top: -50px;
    margin-left: 125px;


}
</style>

<div align="center" class="">


<h1>SILAHKAN LOGIN</h1>
    <div class="container">
        <form method="post" action="login_proses.php" role="login">
        
          <input align="center" type="text" name="username" placeholder="username"  />
          <br>
          <input type="password" name="password" class="" id="password" placeholder="Password" required="" />

          <br>

          <button type="submit" name="go" class="btn btn-primary">Sign in</button>


          </div>

        </form>


      </div>




</div>




        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="js/form_wizard.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
