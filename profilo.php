<?php
session_start();
require 'connessione.php';

				  
$username = $_SESSION['username'];
if($username==""){ header('location: index.php');}
$x_pag = 7;



$pag = isset($_GET['pag']) ? $_GET['pag'] : 1;



if (!$pag || !is_numeric($pag)) $pag = 1; 
$all_rows = mysql_num_rows(mysql_query("SELECT codicea FROM annunci"));


$all_pages = ceil($all_rows / $x_pag);



$first = ($pag - 1) * $x_pag;





$query34 = "SELECT * FROM annunci LIMIT $first, $x_pag ";

$risultati = mysql_query($query34);

$num = mysql_numrows($risultati);

$i=0;

if(isset($_GET['cancella1'])){
	$numero=$_GET['ciao1'];
	$query78= mysql_query("DELETE  FROM messaggio WHERE codiceann= '$numero' ");
	$query4 = mysql_query("DELETE  FROM annunci WHERE codicea= '$numero' ");
 header('location: profilo.php');
}


 if(isset($_GET['logout']))
				  { 
			
		

			  session_destroy();
					  
					  header('location: index.php');
					  exit();
				  }
				  
				  
				  
				  
				  
				   if(isset($_POST['testo'])){
	 
			 $contenuto2 =$_POST['testo'];		
             $categoria= $_POST['categoria'];	
             $recapito = $_POST['recapito']	;	
$titolo = $_POST['titolo']	;			 
					  if($contenuto2=="" OR $recapito=="" OR $titolo==""){
				   echo "<script type='text/javascript'>alert('campi vuoti');</script>";
				
			  }
			   else{
				  




				  
				  $query7 = mysql_query("INSERT into annunci( username,contenuto,categoria,recapito,titolo )VALUES('$username','$contenuto2','$categoria','$recapito','$titolo') ");
				 
			
			 header('location: profilo.php');
}
				  }
				  
	if(isset($_GET['cancella']))
				  { 
			          $query4 = mysql_query("DELETE  FROM annunci WHERE username= '$username' ");
			          $query7 = mysql_query("DELETE FROM persona WHERE username= '$username' ");
					
					  $query789= mysql_query(" UPDATE messaggio SET usernamem = 'Utente ha abbandonato' WHERE  usernamem='$username' ");
					   session_destroy();
					  header('location: index.php');
					  exit();
				  }				  

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <title>Mio profilo</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <!--ricorda di inseriri titolo e mata tag -->
 
<!--link collegamenti -->

<link rel="icon" href="img/favicon.ico" /> <!--favicon -->
<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Niramit|Oswald|Viga" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> <!--freccia torna-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> <!-- social icon  -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script> <!-- NAVBAR -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script><!-- NAVBAR -->
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!--Pulling Awesome Font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- per le icone -->
<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet"><!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One" rel="stylesheet"><!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet"> <!--google font -->
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet"><!--google font -->
<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Changa" rel="stylesheet" ><!--google font -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <!--google font -->
 <link rel="stylesheet" type="text/css" href="css/stile.css"> <!-- il mio stile -->
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
 <style>
    /*schermo ipadpro */
    footer {
       background-color: black;
        clear: both; 
        position:relative;
        bottom:-100px;  
        width:100%;
    }
   
    @media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1.5) {
     footer{
          position: relative;
          bottom:-650px;
         background-color: black;
          width:100%;
      }
}
    
    </style>
</head>
<body>

<br>
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
     
	
		  
	 <li ><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'> inserisci annuncio <span class='fa fa-plus-square-o'>  </a> </li>
	

  

		
		
		<li > <form action="tuttiann.php" method="post">
  &nbsp;&nbsp;  <button type="submit" name="tutti" value="your_value" class="btn-link" style=" padding-top:25px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0">Guarda gli annunci  <span class="fa fa-shopping-bag" > </span></button>
</form>   </li>
	 
      </ul>
	  
      <ul class="nav navbar-nav navbar-right">
	  <?php
	

$risultato = mysql_query("SELECT letto FROM messaggio WHERE usernamed = '$username' AND usernamem !='$username'");
$j=0;
$bao=0;
while ($riga[$j] = mysql_fetch_array($risultato)) {
 $ciao=$riga[$j]['letto'];
if($ciao=="0"){$bao++;}

$j++;
}



	
		
  
	  
	 if($bao>=1){
		 echo" <li><a href='messaggi.php'  data-toggle='tooltip' data-placement='bottom'
   title='' data-original-title='Hai dei messaggi'
   class='red-tooltip' style='font-family: Staatliches, cursive; font-size:25px; padding-top:25px; color:#E0E0E0' >Messaggi  <span class='fa fa-envelope' style='color:red'></span></a> </li>
	  ";}
		   
	  else{
	 echo" <li><a href='messaggi.php' style='font-family: Staatliches, cursive; font-size:25px; padding-top:25px;  color:#E0E0E0' >Messaggi  <span class='fa fa-envelope'></span></a> </li>
	  ";}
	  
	   
	  ?>
      


		<?php  
		echo" 
		<li class='dropdown'>
  <button style=' padding-top:23px; text-decoration:none;'  class='dropdown-toggle btn-link' type='button' id='dropdownMenu1' data-toggle='dropdown'> <font style='font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'>  ".$username."</font> <span class='fa fa-chevron-down'></span></button>  
  <ul class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu1' style='background-color:#222222;'>
   <form action='modificapassword.php'>
  <li role='presentation'>  <input  class='btn-link' type='submit' value='Modifica password 'role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;  color:#E0E0E0 '/></li>
</form>
    <form action='#' method='GET' ><li role='presentation'><button class='btn-link'role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;  color:#E0E0E0 ' name='cancella' onclick='return elimina()'> Elimina account <span class='fa fa-trash-o'></span> </button></li>
	<li role='presentation'><button class='btn-link' name='logout' role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;  color:#E0E0E0 '> Logout <span class='fa fa-sign-out'></span></button></li>
	</form>
   "
       
            ;
    ?>
    
  </ul>
      </div>
    </div>

    </nav>
    

<br><br>




 

<div class="container">
    <div class="row">
        <div class="col-md-12">
		<form action="#" method="post" name="annuncio" >
            <div class="panel-group" id="accordion" >
                <div class="panel panel-info" >
                    <div class="panel-heading" >
                        <h4 class="panel-title" style=" ">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  style="font-family: Viga, sans-serif ; font-size:2rem; color:#FF5050;">
                            inserisci un nuovo annuncio               <span class="fa fa-chevron-down" style="float:right;" > </span> </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse ">
					
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <font style="font-family: 'Viga', sans-serif; text-align:center; " ><b> Specifica [VENDO] o [CERCO] </b></font><br><br>
                                     <font style="font-family: 'Viga', sans-serif;" >Titolo </font><input class="intesto" type="text"name="titolo"  rows="1" placeholder="inserisci qui titolo" style="width:100%;" > 
                                      
                                    </div>
									 <font style="font-family: 'Viga', sans-serif;" >Corpo del testo  </font>
                                    <div class="form-group"><br>
                                       
                                      <textarea name="testo" cols="25" rows="5" placeholder="inserisci il corpo del testo"></textarea>
                                    </div>
									 <div class="form-group">
                                      <font style="font-family: 'Viga', sans-serif;" >E-mail o numero di telefono </font>  
                                  <input class="intesto" type="text"name="recapito"  rows="1" placeholder=" inserisci un recapito" style="width:100%;" > 
                                        
                                    </div>
									<font style="font-family: 'Viga', sans-serif;" >Seleziona una categoria </font>  
                                    <div class="form-group">
                                  
                                       <select name="categoria"> 
    <option value="dominio" name="dominio">Sitiweb-Dominio</option>
    <option value="articoli" name="articoli">Articoli</option>
    <option value="profili-game" name ="profili-game">Profili-game</option>
	 <option value="profili-social" name ="profili-social">Profili-social</option>
	 <option value="pubblicita" name ="pubblicita">Pubblicita' su siti web o social</option>
	 <option value="altro" name ="altro">Altro</option>
										<input class="tasto" type="submit" value="Pubblica" />
                                        </select>
                                        
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
						</div>
                </div>
           </div>     
            </form>
        </div>
    </div>
    </div>
    
 <br>



<?php 
$sqlquery = "SELECT * FROM annunci  WHERE username = '$username' order by dataa DESC" ;
$result1 = mysql_query($sqlquery);
$number = mysql_num_rows($result1);
if($bao>=1){ echo "<div class='container' style='background-color:black; '>
<h2 style='font-family: Viga, sans-serif;  font-size:2.5rem ;color:red; padding-top:12px; text-align:center;'> ";
		 echo" <a href='messaggi.php' style='color:red; text-decoration: underline;'> Hai ricevuto dei   messaggi </a>
	  ";}
		   
	  else{}
	 echo" </h2></div> <br><br>
	  ";
echo "<div class='container' style='background-color:black; '>
<h2 style='font-family: Viga, sans-serif;  font-size:2rem ;color:white; padding-top:12px; '> ";
$i = 0;
if ($number < 1) {
  echo"Non hai annunci ,clicca qui sopra per fare l'inserzione";
     echo " </h2></div><br><br>";
}else{ 
echo "Riepilogo dei tuoi annunci: ";
 echo " </h2></div><br><br>";
  }
  ?>
  
<br>

 <?php
 //dati dentro i div + cancellazione
$result12 = mysql_query("SELECT codicea FROM annunci WHERE username = '$username' LIMIT $first, $x_pag "); 

$number2 = mysql_num_rows($result12);
$array = array(); 
while($r = mysql_fetch_array($result12)) 
{  $array[] = $r[0]; }
	
  $sqlquery = "SELECT * FROM annunci WHERE username = '$username' order by dataa DESC LIMIT $first, $x_pag ";
$result1 = mysql_query($sqlquery);
$number = mysql_num_rows($result1);

$i = 0;
 
  while ($number > $i) {
	   $titolo=mysql_result($result1,$i,"titolo");
    $nome = mysql_result($result1,$i,"contenuto");
	 $codice = mysql_result($result1,$i,"codicea");
	  $categoria = mysql_result($result1,$i,"categoria");
	   $data = mysql_result($result1,$i,"dataa");
		 $ciao=$array[$i];
    
    echo " <div class='container' style='background-color:white; '> <h3 style='font-family: Lato, sans-serif; font-size:1.9rem;'><b>".$titolo." </b><div style='float:right;'> <a href='forum.php?var1=$ciao'>Scrivi</a> </div> </h3><hr style='border: solid 1px; text-align:center';> <p  style= 'font-family: Lato, sans-serif; font-size:1.6rem;'>".$nome." </p> <hr> ";

	 echo" <b> Caricato il:</b> ".$data."<br><b> Categoria: </b>&nbsp;".$categoria."  <div style='float:right;'> Codice N°".$array[$i]." <form  action='#' method='GET'> <input style='width:25px; height:25px;' type='checkbox' name='ciao1' value='$ciao'> </input></div></div><br> "; 
	$i++;
 }
	$result121 = mysql_query("SELECT codicea FROM annunci WHERE username = '$username' LIMIT $first, $x_pag");
	$number21 = mysql_num_rows($result121);
	if($number21>=1){
echo"<div style='float:right; padding-right:50px;'>     <input class='eliminabottone ' data-toggle='tooltip' title='fai check e poi elimina ' type='submit' value= 'elimina annuncio' name='cancella1' onclick='return eliminaann()'></input>  </div> ";
	}
	else {}
  

 


 
	
?>

 <br><br><br><br>


<div class="pagination" style=" position:relative; left:10%; font-family: 'Alfa Slab One', cursive; font-size:15px;"> <?php
if ($all_pages > 1){
  if ($pag > 1){
    echo "<a   href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . ($pag - 1) . "\">";
    echo "Pagina Indietro</a>&nbsp;";
  }
  // faccio un ciclo di tutte le pagine

  if ($all_pages > $pag){
    echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . ($pag + 1) . "\">";
    echo "Pagina Avanti</a>";
  } 
}
?>  </div>







<!--script cancella annuncio -->
<script type="text/Javascript">
function eliminaann()
{
if (confirm("Sei sicuro di voler eliminare l'annuncio?"))
return true;
else
return false;
}
</script>
<script type="text/Javascript">
function elimina()
{
if (confirm("Ci dispiace, sei sicuro di voler cancellare il tuo profilo?"))
return true;
else
return false;
}
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<br><br><br><br>
	<footer class="container-fluid ">
<p style="font-family: 'Alfa Slab One', cursive; font-size:30px;color:white; text-align:center;"> Seguici su </p>
  			<div class="col-md-12"style="text-align:center;">
                    <ul class="social-network social-circle" style="padding-top: 10px;">
                        
                        <li><a href="https://www.facebook.com/Vendoaccount-1075891192593687" title="Facebook" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        
                     
                        <li><a href="https://www.instagram.com/vendoaccount.it/" class="icoInstagram" title="Instagram" rel="nofollow" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>				
				</div>	
				<br>
		<p style="font-family: 'Alfa Slab One', cursive; font-size:15px; color:grey; text-align:center;"> <a href='privacy.php'> Privacy </a>   - <a href='sito.php'>  Regolamento </a>    </p> 
	<p style="font-family: 'Alfa Slab One', cursive; font-size:10px; color:grey; text-align:center;"><br> Sito e grafiche realizzate da Marco Dondo - 2018 <span class="fa fa-creative-commons"> </span> <br> <a href="mailto:info@vendoaccount.it "> info@vendoaccount.it &nbsp;<span class="fa fa-envelope-o"></span></a>	</p>		
</footer>
</body>
</html>