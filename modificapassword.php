<?php
session_start();
require 'connessione.php';

				  
$username = $_SESSION['username'];
if($username==""){ header('location: index.php');}


?>

<!DOCTYPE html>
<html lang="it">

<head>
    <title>Reset password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" href="img/favicon.ico" />
    <!--favicon -->
    <style>
        .form-gap {
            padding-top: 70px;
        }

    </style>

</head>

<body>
    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">

                            <h2 class="text-center">Vuoi modificare la tua password?</h2>
                            <p>inserisci i campi richiesti</p>
                            <div class="panel-body">

                                <form id="register-form" role="form" autocomplete="off" class="form" method="POST" action="#">

                                    <div class="form-group">
                                        <div class="input-group">

                                            <label for="vpass"> Vecchia password </label> <input id="vpass" name="vpass" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <div class="input-group">

                                            <label for="npass"> Nuova password </label> <input id="npass" name="npass" class="form-control" type="password">
                                            <br>
                                            <label for="rnpass"> Ripeti password </label> <input id="rnpass" name="rnpass" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Imposta Password" type="submit">
                                    </div>

                                    <input type="hidden" class="hide" name="token" id="token" value="">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <?php
    
    
   
    if (isset($_POST['vpass'], $_POST['npass'],$_POST['rnpass'])) {
         
         $vpass = md5($_POST['vpass']);
         $npass = md5($_POST['npass']);
         $rnpass = md5($_POST['rnpass']);
        
        
        
        $result = mysql_query("SELECT password FROM persona WHERE username = '$username' ");
$p =mysql_result($result, 0);

        
        
        
         if( $_POST['vpass']==""|| $_POST['npass']==""|| $_POST['rnpass']==""){
				 echo"<script type='text/javascript'>alert('Campi vuoti ');
window.location = 'modificapassword.php';</script>";
			  }
        
         
        
     
       
      
        
        
        
         elseif($npass!=$rnpass){
				echo"<script type='text/javascript'>alert('Password non corrispondenti  ');
window.location = 'modificapassword.php';</script>";
			  }
        
        elseif($p!= $vpass){
            echo"<script type='text/javascript'>alert('Password vecchia non corretta ');
window.location = 'modificapassword.php';</script>";
        }
        
        else{
            mysql_query("UPDATE persona
SET
password = '$rnpass'
WHERE
username = '$username'
");
            echo"Password modificata con successo! <br>  <a href='profilo.php' class='txt1 bo1 hov1' style=' font-size:20px;' >Ritorna indietro</a> ";
        }
              
    }
        
   

	

?>







</body>

</html>
