
<!--avvio di sessione php -->
<?php

session_start();

require 'connessione.php';


?>



<!DOCTYPE html>
<html lang="it">
<head>
  <title>Regolamento </title>
  
  <meta name="description" content="Regolamento vendoaccount"/>
  <meta name="keywords" content="regolamento, rules "/>
  <meta name="author" content="Marco Dondo"/>
 <meta name="viewport" content="width=device-width, initial-scale=1"/>
 <meta charset="utf-8" />
 <meta name="dc.language" content="ita" scheme="RFC1766"/>

 
<!--link collegamenti -->
 
<link rel="icon" href="img/favicon.ico" /> <!--favicon -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> <!--freccia torna-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> <!-- social icon  -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--flippa -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- flippa -->
<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Oswald" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script> <!-- NAVBAR -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script><!-- NAVBAR -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!--Pulling Awesome Font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- per le icone -->
<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet"><!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One" rel="stylesheet"><!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet"> <!--google font -->
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet"><!--google font -->
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Niramit|Oswald|Viga" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/stile.css"> <!-- il mio stile -->
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

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
      <a class="navbar-brand" href="index.php"style="padding-top:4px;"><img src="img/logobianco.png" style="width:180px;" alt="advertising" /></a>
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
     
	 <?php if (isset( $_SESSION['username'])) {
		  
		 echo " <li ><a href='profilo.php'  style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'> inserisci annuncio <span class='fa fa-plus-square-o'>  </a> </li>";
	
}
else{
				  echo " <li><a href=''onclick='mostraMessaggio()' style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'>  inserisci annuncio <span class='fa fa-plus-square-o'> </span> </a> </li>";
			  }
			  ?>
  

		
		
		<li > <form action="tuttiann.php">
            &nbsp;&nbsp;  <button   name="tutti"  class="btn-link"style="padding-top:2.2rem; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0">Guarda gli annunci <span class="fa fa-shopping-bag" ></span> </button> </form> 
   </li>
	 
      </ul>
	  
      <ul class="nav navbar-nav navbar-right">
	   <li class="" style="text-align:center;"> 
	   
	  
         <?php if (isset( $_SESSION['username'])) {
		  
		
	
}
else{
				  echo " <li class='dropdown'>
          <a style='font-family: Staatliches, cursive; font-size:25px; padding-top:30px; color:#E0E0E0' href='registr.php' class='dropdown-toggle ' >  Registrati  <span class='fa fa-address-card-o'></span></a>
          
        </li>";

  }
			  ?>

<?php if (isset( $_SESSION['username'])) {
		  
		 echo " <li> <a href='profilo.php' style='font-family: Staatliches, cursive; font-size:25px;padding-top:30px; color:#E0E0E0'>   mio profilo  <span class='fa fa-user-circle-o'></span></a> </li>";
	
}
else{
				 echo "
				  
				  
				  <li class='dropdown'>
         <a style='font-family: Staatliches, cursive; font-size:25px; padding-top:30px; color:#E0E0E0' href='log.php' class='dropdown-toggle ' > Log In <span class='fa fa-sign-in'></span></a>
          
        </li>";
			  }
			  ?>
      </ul>
    </div>
  </div>
</nav>
<br>
<div class='container' style='background-color:white; font-family: Viga, sans-serif;'>
<h1>Regolamento del sito </h1>






<p>Il sito è stato realizzato per poter dare uno spazio a chi vuole vendere i proprio prodotti digitali, nella fattispecie ci si vuole dedicare a: Sitiweb, Account social e game, articoli e servizi editoriali, pubblicità per siti web, grafiche e prestazioni digitali in generale. Pertanto tutto ciò che non rigurda questi suddetti argomenti verrà rimosso dai gestori del sito</p>
<p> Specificare l'argomento di ricerca o vendita  o con l'apposizione di  "CERCO" o "VENDO" nel titolo o nel corpo del testo dell'annuncio.  </p>
<p>Qualsiasi parola blasfema, volgare,razzista o turpiloquio tra gli utenti verrà segnalato in modo automatico ai gestori e dopo un primo ammonimento l'utente verrà bannato dal sito.   </p>

<br>
<p> <strong>I gestori di questo sito si esimono da qualsiasi responsabilità dovuta ad atti contro il sito stesso da parte degli utenti e qualsiasi atto derivato dagli utenti stessi. </strong>  </p>
<br>
<h2>Impegno dei gestori</h2>
<ul>
    <li>
        <p><strong>Dati personali </strong></p>
                <p>Ci si impegna affinchè la tutela dei dati personali sia preservata nel rispetto degli utenti iscritti, l'email <strong>NON </strong> verrà utilizzata per scopi commerciali. </p>
            </li>
    <li>
        <p><strong>Trattative</strong></p>
        <p>Il sito non si fa garante delle trattaive di compravendita tra gli utenti ma si pone l'obiettivo di garantire il solo ed esclusivo spazio per la vendita del prodotto digitale, pertanto vendoaccount si esime da qualsisi responsabilità derivata dall'acquisto e della vendita. </p>
    </li>
    <li>
        <p><strong>Forum e discussione</strong></p>
        <p>Ci si impegna affinchè la comunicazione tra gli utenti possa essere chiara e possa garantire tempistiche ottimali. </p>
    </li>
   
</ul>




		</div>
		<br>
		<script type="text/javascript">

function mostraMessaggio() {
	window.alert("prima devi fare l'accesso");
}


</script>
		</body>
		</html>