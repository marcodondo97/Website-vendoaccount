<?php
session_start();
require 'connessione.php';				  
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <title>Scrivi al venditore</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Marco Dondo" />
    <meta name="description" content="Rispondi subito all'annuncio " />
    <meta name="keywords" content="" />
    <meta name="dc.language" content="ita" scheme="RFC1766" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <!--link collegamenti -->

    <link rel="icon" href="img/favicon.ico" />
    <!--favicon -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Niramit|Oswald|Viga" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--freccia torna-->
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> <!-- social icon  -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--flippa -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- flippa -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> <!-- NAVBAR -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script><!-- NAVBAR -->
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Pulling Awesome Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- per le icone -->
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet"><!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One" rel="stylesheet"><!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet">
    <!--google font -->
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet">
    <!--google font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Changa" rel="stylesheet">
    <!--google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--google font -->
    <link rel="stylesheet" type="text/css" href="css/stile.css"> <!-- il mio stile -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">

    <style>

    </style>
</head>

<body>
    <br>
    <!--navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button style="border: solid 0.4px grey; " type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="padding-top:4px;"><img src="img/logobianco.png" style="width:180px;" alt="me" /></a>
                <form action="ricerca.php" method="post" class="navbar-brand nav navbar-form " role="search" style="padding-top:20px;">
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



                    <li><a href="profilo.php" style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'> inserisci annuncio <span class='fa fa-plus-square-o'></span> </a> </li>






                    <li>
                        <form action="tuttiann.php" method="post">
                            &nbsp;&nbsp; <button type="submit" name="tutti" value="your_value" class="btn-link" style='font-size:25px; padding-top:25px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'>Guarda gli annunci <span class="fa fa-shopping-bag"> </span></button>
                        </form>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="" style="text-align:center;">





                    <li> <a href='profilo.php' style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'> mio profilo <span class='fa fa-user-circle-o'></span></a> </li>

                </ul>
            </div>
        </div>
    </nav>

    <br>



    <?php
     if (isset($_GET['var1'])){
	$ciao =$_GET['var1'];	
 
 $sql = "SELECT * FROM annunci WHERE codicea = '$ciao' ";
$result1 = mysql_query($sql);


$row=mysql_fetch_array($result1);


 echo"<br>";
	  echo "<div class='container' style='background-color:white;'>
	  <h3 style='font-family: Lato, sans-serif; font-size:1.9rem;'>".$row['titolo']." <div style='float:right;'><font style='font-size:15px;'>Caricato da </font> <b>".$row['username']."</b> </div>  </h3>
	  <hr style='border: solid 1px; text-align:center';>
	  <p  style= 'font-family: Lato, sans-serif; font-size:1.6rem;'>".$row['contenuto']." </p>  ";

	 echo" <b> Caricato il:</b> ".$row['dataa']."<br><b> Categoria: </b>&nbsp;".$row['categoria']."  <div style='float:right;'> Codice N°".$ciao." </div>
	 </div><br>  <div class='container' style='background-color:black; height:80px;'>
<h3 style='font-family: Viga, sans-serif ; color:white;padding-top:12px; text-align:center; '>  Risposte </h3>
</div> <br>"; 
 }

 $sqlquery1 = "SELECT  * FROM messaggio WHERE codiceann = '$ciao' group by contenutom,usernamem  order by data asc ";
$result12 = mysql_query($sqlquery1);
$number = mysql_num_rows($result12);

if($number>=1){
$i = 0;
 
 while ($number > $i) {
	
    $usernamem = mysql_result($result12,$i,"usernamem");
	 $contenutom = mysql_result($result12,$i,"contenutom");
	 $data = mysql_result($result12,$i,"data");
	 $codicem= mysql_result($result12,$i,"codicem");
	 $codiceann= mysql_result($result12,$i,"codiceann");
	   
	   echo " <div class='container' style='background-color:#D0D0D0;'> ";
	    
	  echo" <font style='font-family: Lato, sans-serif; font-size:1.5rem;'>".$usernamem."";
	  if($usernamem==$username){
		   echo"<div style=' float:right;'>
		<div class='btn-group'>
  <button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='font-size:1.3rem;'>
<span class='	fa fa-cog'> </span>
  </button>
  <div class='dropdown-menu dropdown-menu-right'>
    <a class='dropdown-item' href='forum.php? varmess=$codicem  '>Elimina messaggio</a>
	  <div class='dropdown-divider'></div><br>
    <a class='dropdown-item' href='forum.php? abb=$codiceann' >Abbandona </a>
  
  </div>
</div>



		        </div>";
	   }	
	  
	  echo"<br> il&nbsp;".$data."&nbsp; ha risposto: ";


echo"	  </font> ";
	   
	  
	   
	  echo" <hr style='border: solid 1px; text-align:center';> <h3 style='font-family:Viga, sans-serif; font-size:1.9rem'>".$contenutom." </h3></div> <br>";

	
	   $i++;
}} 

 else{}

	   echo"<br> 
	  
		<div class='container' style='background-color:black;height:150px;'><br><br>
		<form action='#' method='POST' >
		<div class='input-group'>
 <textarea class='form-control' rows='2' cols='2' name='scrivi'  > </textarea>
  <div class='input-group-btn'>
  <button type='submit' class='btn btn-success' name='messaggio' Style='width:100%; height:54px;' > invia messaggio</button></div></div>
</form></div>
  <br>";


 if(isset($_POST['messaggio'])){
	 
			 $messaggio =$_POST['scrivi'];		
            
					  if($messaggio==" "){
				   echo "<script type='text/javascript'>alert('campi vuoti');</script>";
				
			  }
			   else{
				  

$query = "SELECT * FROM messaggio WHERE codiceann='$ciao'"; 
$result = mysql_query($query) or die (mysql_error()); 
$totalrows = mysql_num_rows($result); 
if( $totalrows==0){
				 
				  
$sql11 = "SELECT * FROM annunci  WHERE codicea = '$ciao' ";





$result11 = mysql_query($sql11);


$row2=mysql_fetch_array($result11);
$usernamed=$row['username'];

$row=mysql_fetch_array($result12);
				  
				 $query7 = mysql_query("INSERT into messaggio( contenutom,usernamem,usernamed,letto,codiceann )VALUES('$messaggio','$username','$usernamed','0','$ciao') ");
				 
}
else				 
				 
				 $result12 = mysql_query("SELECT usernamem FROM messaggio WHERE codiceann='$ciao'"); 

$number = mysql_num_rows($result12);
$array = array(); 
while($r = mysql_fetch_array($result12)) 
{  $array[] = $r[0]; }
	
 


$arr2 = array_unique($array);


 $arr2 = array_diff($arr2, ["$username"]);
 
 sort($arr2);
 $u=count($arr2);
for($i = 0;$i<$u;$i++){
	
			$usernamem=$arr2[$i];
		
				 
		

				  $query7 = mysql_query("INSERT into messaggio( contenutom,usernamem,usernamed,letto,codiceann )VALUES('$messaggio','$username','".$usernamem."','0','$ciao') ");
}
				  
echo"<script>
location.href = 'forum.php?var1=$ciao';
</script>";
}
				  

 
  
 }
 
 



if (isset($_GET['varmess'])){
	 
	                $codicem =$_GET['varmess'];
				 $sql = "SELECT * FROM messaggio WHERE codicem = '$codicem' ";
$result1 = mysql_query($sql);


$row=mysql_fetch_array($result1);


 
	
			          $query4 = mysql_query("DELETE  FROM messaggio WHERE contenutom= '".$row['contenutom']."' and codiceann='".$row['codiceann'] ."' and usernamem='$username' ");
			         
					  echo"<script>

    window.history.back();

</script>";
		
					 
				  }		


	 if (isset($_GET['abb'])){
	 
	                $code =$_GET['abb'];
				 
			          $query4 = mysql_query("UPDATE messaggio SET usernamem = 'Utente ha abbandonato' WHERE codiceann='$code' AND usernamem='$username' ");
			         
					  echo"<script>

    window.history.back();

</script>";
		
					 
				  }			 
		
 ?>
</body>

</html>
