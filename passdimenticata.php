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
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Password dimenticata?</h2>
                        <p>Puoi resettare la tua password qui</p>
                        <div class="panel-body">

                            <form id="register-form" role="form" autocomplete="off" class="form" method="GET" action="#">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input id="email" name="email" placeholder=" Indirizzo email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
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
    
require('connessione.php');
    
    
    
if(isset($_GET['email'])) {
	if($_GET['email']==""){  echo"<script type='text/javascript'>alert('Nessuna email inserita') </script>";} else {
	
				  $email = $_GET['email'];
$nome_mittente = "Vendoaccount";
$mail_mittente = "vendoaccount@altervista.org"; /* ricorda di eliminare */

				   
					  
					  
					  $sqlquery = "SELECT * FROM persona WHERE email = '$email'";
$result = mysql_query($sqlquery);
$number = mysql_num_rows($result);



$i = 0;
if ($number < 1) {
  print "<script type='text/javascript'>alert('Email non riconosciuta') </script>";
}else{
  while ($number > $i) {
    $usern = mysql_result($result,$i,"username");
    $email1 = mysql_result($result,$i,"email");
	 $passd = mysql_result($result,$i,"password");
    echo "
    <b>E-Mail:</b> $email1</p>";
    $i++;
  }
}

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$newp= randomPassword();
   $newpassword= md5($newp);


mysql_query("UPDATE persona
SET
password = '$newpassword'
WHERE
email = '$email'
");

			
// definisco il subject ed il body della mail
$mail_oggetto = "Recupero password vendoaccount";
$mail_corpo = "ciao".$usern. " la tua password e'".$newp;

// aggiusto un po' le intestazioni della mail
// E' in questa sezione che deve essere definito il mittente (From)
// ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();

if (mail($email, $mail_oggetto, $mail_corpo, $mail_headers)){
	
	 echo "Messaggio inviato con successo a " .$mail."controlla anche nella posta indesiderata";
	
}
 
else
  echo "Errore. Nessun messaggio inviato."; 
}
 
 
}
?>







</body>

</html>
