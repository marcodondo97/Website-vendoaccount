<?php
session_start();
require 'connessione.php';

				  
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <title>I tuoi messaggi</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <!--link -->
 
<link rel="icon" href="img/favicon.ico" /> <!--favicon -->
<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Niramit|Oswald|Viga" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> <!--freccia torna-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> <!-- social icon  -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--flippa -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- flippa -->

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script> <!-- NAVBAR -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script><!-- NAVBAR -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!--Pulling Awesome Font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- per le icone -->
<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet"><!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One" rel="stylesheet"><!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet"> <!--google font -->
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet"><!--google font -->
<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Changa" rel="stylesheet"> <!--google font -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <!--google font -->
<link rel="stylesheet" type="text/css" href="css/stile.css"> <!-- il mio stile -->
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
</head>
<body>

<br>
<!-- inizio nav -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
     <button style="border: solid 0.4px grey; "type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only" >Toggle navigation</span>
        <span class="icon-bar" style="background-color:grey;"></span>
        <span class="icon-bar" style="background-color:grey;"></span>
        <span class="icon-bar" style="background-color:grey;"></span>
      </button>
      <a class="navbar-brand" href="index.php"style="padding-top:4px;"><img src="img/logobianco.png" style="width:180px;" alt="me" /></a>
	  <form action="ricerca.php" method="post" class="navbar-brand nav navbar-form " role="search"style="padding-top:20px;"  >
        <div class="input-group">
            <input name="campo" type="text" class="form-control" placeholder="Cerca" name="q" style="max-width:300%;">
            <div class="input-group-btn">
                <button name="ricerca" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
     
	
		  
          <li ><a  href="profilo.php"  style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'> inserisci annuncio <span class='fa fa-plus-square-o'> </span>  </a> </li>
	

  

		
		
		<li > <form action="tuttiann.php" method="post">
  &nbsp;&nbsp;  <button type="submit" name="tutti" value="your_value" class="btn-link"  style='font-size:25px; padding-top:25px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'>Guarda gli annunci <span class="fa fa-shopping-bag" > </span></button>
</form>   </li>
	 
      </ul>
	  
      <ul class="nav navbar-nav navbar-right">
	   <li class="" style="text-align:center;"> 
	   
	  
      


		 <li> <a href='profilo.php'  style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0' >   mio profilo  <span class='fa fa-user-circle-o'></span></a> </li>
        </ul>
      </div>
    </div>
    </nav>
    <!--chiusura nav -->
<br>



 <?php
  

$result12 = mysql_query("SELECT codiceann FROM messaggio WHERE letto = '0' and usernamed='$username'"); 

$number = mysql_num_rows($result12);
if($number==0){
	echo"<div class='container' style='background-color:black; '>
<h3 style='font-family: Viga, sans-serif;  font-size:30px;color:white; padding-top:12px; text-align:center;'>

Non hai messaggi

 </h3><br>
</div><br>";
}
$array = array(); 
while($r = mysql_fetch_array($result12)) 
{  $array[] = $r[0]; }
	
 


$arr2 = array_unique($array);
sort($arr2);
$u=count($arr2);
 
	  
		for($i = 0;$i<$u;$i++){
			$codice=$arr2[$i];
		$sql = "SELECT * FROM annunci WHERE codicea = '$codice' ";
$result1 = mysql_query($sql);


$row=mysql_fetch_array($result1);

 echo " <div class='container' style='background-color:white; '> <h3 style='font-family: Lato, sans-serif; font-size:1.9rem;'><b>".$row['titolo']."</b> <div style='float:right;'> <a href='forum.php?var1=$codice'>Guarda risposte</a> </div> </h3><hr style='border: solid 1px; text-align:center';> <p  style= 'font-family: Lato, sans-serif; font-size:1.6rem;'>".$row['contenuto']." </p> <hr> ";

	 echo" <b> Caricato il:</b> ".$row['dataa']."<br><b> Categoria: </b>&nbsp;".$row['categoria']." </div><br> "; 
 
	  
			
		}
		
 $query =("UPDATE messaggio SET letto = 1 WHERE usernamed = '$username'");
$result = mysql_query($query);
?>


</body>
</html>
