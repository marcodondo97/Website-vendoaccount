<?php
session_start();
require 'connessione.php';
$x_pag = 10;
$pag = isset($_GET['pag']) ? $_GET['pag'] : 1;
if (!$pag || !is_numeric($pag)) $pag = 1; 
$all_rows = mysql_num_rows(mysql_query("SELECT codicea FROM annunci WHERE categoria='articoli'"));
$all_pages = ceil($all_rows / $x_pag);
$first = ($pag - 1) * $x_pag;
$query34 = "SELECT * FROM annunci WHERE categoria='articoli'  order by dataa DESC LIMIT $first, $x_pag  ";
$risultati = mysql_query($query34);
$num = mysql_numrows($risultati);
$i=0;
	?>






<!DOCTYPE html>
<html lang="it">

<head>
    <title>Articoli per sitiweb</title>
    <meta charset="utf-8" />
    <meta name="description" content="Qui potrai inserire e trovare annunci di articoli, traduzioni e scrittura per blog e sitiweb. " />
    <meta name="keywords" content="moda, articoli, editoriali, temi, blogger, recensioni, collaborazioni, scrittura, storytelling, seo, freelance" />
    <meta name="author" content="Marco Dondo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="dc.language" content="ita" scheme="RFC1766" />


    <!--link e collegamenti  -->

    <link rel="icon" href="img/favicon.ico" />
    <!--favicon -->

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--freccia torna-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Niramit|Oswald|Viga" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> <!-- social icon  -->

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--flippa -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- flippa -->
    
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> <!-- NAVBAR -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script><!-- NAVBAR -->
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
      }
}
    
    </style>
</head>

<body>
    <br>
    <!-- navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button style="border: solid 0.4px grey; " type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="padding-top:4px;"><img src="img/logobianco.png" style="width:180px;" alt="bloccare" /></a>
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

                    <?php if (isset( $_SESSION['username'])) {
		  
		 echo " <li ><a href='profilo.php'  style='font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0; padding-top:30px;'> inserisci annuncio <span class='fa fa-plus-square-o'>  </a> </li>";
	
}
else{
				  echo " <li><a href=''onclick='mostraMessaggio()' style='font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0; padding-top:30px;'>  inserisci annuncio <span class='fa fa-plus-square-o'> </span> </a> </li>";
			  }
			  ?>




                    <li class='dropdown'>
                        <button style=' padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0; padding-top:30px;  text-decoration:none;' class='dropdown-toggle btn-link ' type='button' id='dropdownMenu1' data-toggle='dropdown'> Cambia categoria <span class='fa fa-chevron-down'></span></button>


                        <ul class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu1' style='background-color:#222222;'>
                            <form action='domini.php' method='GET'>
                                <li role='presentation'><button class='btn-link' role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;' onclick=''> Domini </button></li>
                            </form><br>

                            <form action='profili-game.php' method='GET'>
                                <li role='presentation'><button class='btn-link' role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;' onclick=''> Profili-game </button></li>
                            </form><br>

                            <form action='profili-social.php' method='GET'>
                                <li role='presentation'><button class='btn-link' role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;' onclick=''> Profili-social </button></li>
                            </form><br>

                            <form action='pubblicita.php' method='GET'>
                                <li role='presentation'><button class='btn-link' role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;' onclick=''> Pubblicita' </button></li>
                            </form><br>

                            <form action='altro.php' method='GET'>
                                <li role='presentation'><button class='btn-link' role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;' onclick=''> Altro </button></li>
                            </form><br>

                            <form action='tuttiann.php' method='GET'>
                                <li role='presentation'><button class='btn-link' role='menuitem' tabindex='1' style='font-size:18px; font-family: Staatliches, cursive;' onclick=''> Tutti </button></li>
                            </form><br>

                        </ul>
                    </li>
                </ul>


                <ul class="nav navbar-nav navbar-right">
                    <li class="" style="text-align:center;">


                        <?php if (isset( $_SESSION['username'])) {
		  
		
	
}
else{
				  echo " 
          <li class='dropdown'>
          <a  style='font-family: Staatliches, cursive; font-size:25px; padding-top:29px; color:#E0E0E0' href='registr.php' class='dropdown-toggle ' >  Registrati  <span class='fa fa-address-card-o'></span></a>
          </li>";

  }
			  ?>

                        <?php if (isset( $_SESSION['username'])) {
		  
		 echo " <li> <a href='profilo.php'style='font-family: Staatliches, cursive; font-size:25px;  padding-top:29px; color:#E0E0E0' >   mio profilo  <span class='fa fa-user-circle-o'></span></a> </li>";
	
}
else{
				   echo "
        <li class='dropdown'>
          <a style=' padding-top:29px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0' href='log.php' >Log In <span class='fa fa-sign-in'></span></a>
          
        </li>";
			  }?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- chiusura navbar -->

    <br><br>

    <?php
if($pag=="1"){
echo"<div class='container-fluid' style='background-color:black; '>
<h3  style=' color:white; padding-top:12px; font-family: Viga, sans-serif ; '>Articoli per siti web e servizi editoriali <h3>
</div>";}
else{}
?>
    <br><br>
    <?php

while ($i < $num) {
$titolo = mysql_result($risultati, $i, "titolo");
$username = mysql_result($risultati, $i, "username");
$recapito = mysql_result($risultati, $i, "recapito");
$contenuto = mysql_result($risultati, $i, "contenuto");
$ciao= mysql_result($risultati, $i, "codicea");


 echo " <div class='container' style='background-color:white; '> <h3  style='font-family: Lato, sans-serif; font-size:1.9rem;'><b>".$titolo."</b><div style='float:right;'>";
  if (isset( $_SESSION['username'])) {
	 echo" <a href='forum.php?var1=$ciao'>Scrivi</a> </div>"; 
  }
  else{
  echo" <a href=''onclick='mostraMessaggio()'> Scrivi </a>";}
 
echo" </h3><hr style='border: solid 1px; text-align:center';> <p style= 'font-family: Lato, sans-serif; font-size:1.6rem;'>".$contenuto." </p> <hr> ";

	 echo"<b> Scritto da : </b>&nbsp;".$username." <div style='float:right;'> <b>Recapito:</b>&nbsp; ".$recapito." </div></div><br><br> "; 

$i++;
		 

}	  



?>

    <script>
        function mostraMessaggio() {
            window.alert("prima devi fare l'accesso");
        }

    </script>

    <br><br><br><br><br><br><br><br>
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
?> </div>

    <script type="text/javascript">
        function mostraMessaggio() {
            window.alert("prima devi fare l'accesso");
        }

    </script>


  <footer class=" container-fluid" >
        <p style="font-family: 'Alfa Slab One', cursive; font-size:25px;color:white; text-align:center;"> Seguici su </p>
        <div class="col-md-12" style="text-align:center;">
            <ul class="social-network social-circle" style="padding-top: 10px;">

                <li><a href="https://www.facebook.com/Vendoaccount-1075891192593687" class="icoFacebook" title="Facebook" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a></li>


                <li><a href="https://www.instagram.com/vendoaccount.it/" class="icoInstagram" title="Instagram" rel="nofollow" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <br>
        <p style="font-family: 'Alfa Slab One', cursive; font-size:15px; color:grey; text-align:center;"> <a href='privacy.php'> Privacy </a> - <a href='regolamento.php'> Regolamento </a> </p>
        <p style="font-family: 'Alfa Slab One', cursive; font-size:10px; color:grey; text-align:center;"><br> Sito e grafiche realizzate da Marco Dondo - 2018 <span class="fa fa-creative-commons"> </span> <br> <a href="mailto:vendoaccount@altervista.org"> vendoaccount@altervista.org &nbsp;<span class="fa fa-envelope-o"></span></a> </p>
    </footer>
   
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-134817149-1');

    </script>
</body>

</html>
