<!--avvio di sessione php -->
<?php

session_start();

require 'connessione.php';

?>

<!-- HTML codice -->
<!DOCTYPE html>
<html lang="IT">

<head>

    <title>Compravendita di profili social e games </title>
    <!--Meta tag -->
    <meta charset="UTF-8" />
    <meta name="author" content="Marco Dondo">
    <meta name="description" content=" Cerca o inserisci gratis i tuoi  annunci per la compravendita di profili games e social, domini, articoli per blog, pubblicità su siti web e molto altro ancora">
    <meta name="dc.language" content="ita" scheme="RFC1766">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=" instagram, netflix, steam, console,followers, banner, gudagni, facebook,lol, clash of clans, fortnite, clash royale,profilo,fans,minecraft">



    <link rel="icon" href="img/favicon.ico" />
    <!--favicon -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--freccia torna su-->
    <!-- Bootstrap  CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet"> <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Niramit|Oswald|Viga" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- per le icone -->
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet"><!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One" rel="stylesheet"><!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet">
    <!--google font -->
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee|Concert+One|Fontdiner+Swanky" rel="stylesheet">
    <!--google font -->


</head>
<!-- css interno -->
<style>
    /*ritorna su*/
    #return-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: red;
        background: purple;
        width: 50px;
        height: 50px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    #return-to-top i {
        color: #fff;
        margin: 0;
        position: relative;
        left: 16px;
        top: 13px;
        font-size: 19px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }








    ul.social {
        margin: 0;
        padding: 0;
        width: 100%;
        text-align: center;
    }

    ul.social>li {
        display: inline-block;
    }

    ul.social>li>a {
        display: inline-block;
        font-size: 18px;
        line-height: 30px;
        width: 30px;
        height: 30px;
        border-radius: 36px;

        color: #fff;
        margin: 0 3px 3px 0;
    }

    ul.social>li>a:hover {
        text-decoration: none;

    }

    .btn-link {
        border: none;
        outline: none;
        background: none;


        padding: 0;


    }

    .arrow {
        text-align: center;
        margin: 8% 0;
    }

    .bounce {
        -moz-animation: bounce 2s infinite;
        -webkit-animation: bounce 2s infinite;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-30px);
        }

        60% {
            transform: translateY(-15px);
        }
    }

</style>

<body>

    <!-- Navbar interattiva codice php interno -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container-fluid">
            <img src="img/logobianco.png" style="width:150px;" alt="Logo di vendoaccount.it" />

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <?php if (isset( $_SESSION['username'])) {
		  
		 echo "  <li class='nav-item'><a class='nav-link' href='profilo.php' style='font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'> inserisci annuncio <span class='fa fa-plus-square-o'>  </a> </li>";
	
}
else{
				  echo " <li class='nav-item'><a  class='nav-link' onclick='mostraMessaggio()' style='font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0' >  inserisci annuncio <span class='fa fa-plus-square-o'> </span> </a> </li>";
			  }
			  ?>



                    <li class="nav-item">
                        <form action="tuttiann.php">
                            <button name="tutti" class="nav-link btn-link" style="padding-top:0.5rem; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0">Guarda gli annunci <span class="fa fa-shopping-bag"></span></button></form>
                    </li>
                    <?php if (isset( $_SESSION['username'])) {
				 
				 echo " <li class='nav-item'>
				 <a class='nav-link' href='profilo.php' style='font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'  >   mio profilo  <span class='fa fa-user-circle-o'></span></a> </li>"; 
			 }
			 else {
          echo"  <li class='nav-item'>
              <a class='nav-link' href='registr.php' style='font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'>Registrati <span class='fa fa-address-card-o'></span>&nbsp;</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='log.php' style='font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'>Log In <span class='fa fa-sign-in'></span></a>
			 </li> ";}
			?>
                </ul>
            </div>
        </div>
    </nav>
    <!--immagine di testata con logo -->

    <header style="height:25rem; background-image: url('img/prova1.jpg'); background-size: cover;">

        <div style="float:left; padding-top:10rem;"><img src="img/logobianco.png" style="width:85%;"/></div>


    </header>

    <br>

    <!-- primo blocco di presentazione -->
    <div class="container-fluid" style="background-color:#1D1D1D">
        <br><br> 
        <h1 style="color:#F0F0F0; line-height: 18px  font-family: 'Viga', sans-serif; "> Benvenuto! </h1>
        <p style="color:#F0F0F0; line-height: 18px  font-family: 'Viga', sans-serif; ">
            Vendoaccount è una vetrina online dedicata a chi vuole vendere, comprare o scambiare prodotti digitali. <br>
            Come? <a href="registr.php"> Registrati </a> o <a href="log.php">accedi </a> al sito e potrai pubblicare gratuitamente i tuoi annunci ed iniziare subito a far parte della community.<br>
            Tra le inserzioni potrai trovare il dominio web che stai cercando o siti web completi da adattare alle tue esigenze, ma non solo, anche i contenuti giusti per il tuo blog: articoli, recensioni e traduzioni inediti sono disponibili tra gli annunci.
            I prodotti digitali non finiscono qui, tra le categorie potrai trovare anche account social con numerosi follower, oppure se hai un profilo social, ma non riesci più a gestirlo, mettilo in vendita ora e fai fruttare i seguaci che hai accumulato nel tempo.
            Allo stesso modo, se sei un gamer esperto e vuoi vendere il tuo account avanzato di videogiochi o console, all'interno della community qualcuno potrebbe essere interessato ai tuoi traguardi.
            Inoltre, attraverso gli annunci, puoi vendere o scambiare spazi pubblicitari sul tuo sito o sui tuoi canali social.<br>
            <br>
            Allora, cosa stai aspettando? Pubblica subito il tuo annuncio, vendi su Vendoaccount.it!


        </p>
         <br><br>
        
    </div>

    <br>



    <!--label search -->
    <div class="container  ">
        <br><br>
        <p style="font-family: 'Viga', sans-serif; font-size:1.4rem; text-align:center; "> <b>Fai la tua ricerca </b></p>
    </div>




    <div class="container ">

        <form action="ricerca.php" method="post">
            <div class='input-group'>
                <input type="text" name="campo" class='form-control' rows='1' cols='2' style="border:solid 1px;" />


                <input type="submit" value=" cerca" class='btn btn-primary' Style='width:20%; height:54px; ' />

            </div>
        </form>
    </div>

    <!--freccia rimbalza -->
    <br>
    <p style="font-family: 'Viga', sans-serif; font-size:1.4rem;text-align:center "> <b> Oppure naviga tra le categorie </b> </p>
    <div class="arrow bounce">
        <p class="fa fa-arrow-down fa-2x" href="#"></p>
    </div>

    <!--blocco domini-->
    <section style="background-color:black;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">

                        <a href="domini.php" rel="follow"> <img class="img-fluid rounded-circle" src="img/012.jpg" alt="Vendere sito web avviato vendoaccount" style="max-width:60%;" /> </a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-7"> <a href="domini.php" rel="follow">
                            <h3 class="display-4" style="color:white;">Siti e Domini</h3>
                        </a>
                        <p style="color:white;  font-family: 'Viga', sans-serif; "> Hai sempre desiderato avere un blog o un sito web ma non sai come fare a costruirlo? <br>
                            É questa la categoria che fa per te, tra gli annunci potrai trovare siti in vendita da parte di utenti che non vogliono più aggiornarlo, comprandolo potrai renderlo tuo e unico, in alternativa potresti cercare il dominio perfetto per il tuo nuovo sito.
                            Se invece hai un sito ma non riesci più ad occupartene, inserisci subito il tuo annuncio e vendilo o scambialo con un utente interessato. </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--blocco profili games -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <a href="profili-game.php" rel="follow"> <img class="img-fluid rounded-circle" src="img/013.jpg" alt="Profili di videogiochi in vendita vendoaccount" style="max-width:60%;" /> </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-7">
                        <a href="profili-game.php" rel="follow">
                            <h3 class="display-4" style="color:black;">Profili games</h3>
                        </a>
                        <p style=" font-family: 'Viga', sans-serif;"> Per chi cerca o vuole vendere il proprio account games: Lol, Clash of Clans, Fortnite e tanti altri profili di videogiochi e console sono in vendita. <br>Se hai un account di videogiochi o console avanzato e non vuoi perdere i tuoi risultati , qui potrai inserire un annuncio per trovare un potenziale compratore interessato ai tuoi traguardi videoludici.
                            Al contrario se non sai proprio come fare per migliorarti nel tuo gioco preferito, compra qui l'account più adatto a te. <br>
                            Naviga tra gli annunci e potrai trovare tutti i games del momento e continuare a giocare a un livello più alto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--blocco profili social -->
    <section style="background-color:black;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">

                        <a href="profili-social.php" rel="follow"> <img class="img-fluid rounded-circle" src="img/031.jpg" alt="Account social con tanti followers, fans e iscritti instagram. " style="max-width:60%;" /> </a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-7"> <a href="profili-social.php" rel="follow">
                            <h3 class="display-4" style="color:white;">Profili social</h3>
                        </a>
                        <p style="color:white;font-family: 'Viga', sans-serif;">Hai un account social ben avviato che non riesci più a gestire? Questa sezione fa al caso tuo, inserisci qui il tuo annuncio e vendilo per non perdere il frutto del tuo lavoro.<br>
                            Vuoi potenziare la tua influenza social ma non vuoi partire da zero? Ci sono numerosi canali youtube, pagine facebook e profili instagram con tanti seguaci , che stanno per diventare inattivi. Comprando l'account che si adatta alle tue esigenze avrai nuovi followers e inizierai al meglio la tua campagna social.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- blocco articoli-->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <a href="articoli.php" rel="follow"> <img class="img-fluid rounded-circle" src="img/015.jpg" alt="Articoli per blog già scritti, traduzioni, gratis,recensioni" style="max-width:60%;" /> </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-7">
                        <a href="articoli.php" rel="follow">
                            <h3 class="display-4" style="color:black;">Articoli</h3>
                        </a>
                        <p style="font-family: 'Viga', sans-serif;"> Vuoi dei nuovi contenuti per il tuo sito? Qui potrai scoprire articoli di autori indipendenti che mettono in vendita editoriali, recensioni, traduzioni e molti altri contenuti che possono esserti utili. <br>
                            E per te che sei uno scrittore digitale, qui potrai trovare un ampio pubblico a cui proporre i tuoi lavori recenti e anche quelli più datati, per dargli finalmente il loro giusto spazio. Pubblica subito un annunci! </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blocco pubblicita -->
    <section style="background-color:black;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">

                        <a href="pubblicita.php" rel="follow"> <img class="img-fluid rounded-circle" src="img/016.jpg" alt="Spazi pubblicitari banner su siti canali youtube" style="max-width:60%;" /> </a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-7"> <a href="pubblicita.php" rel="follow">
                            <h3 class="display-4" style="color:white;">Pubblicità online</h3>
                        </a>
                        <p style="color:white; font-family: 'Viga', sans-serif;  "> Il tuo sito web ha un potenziale, inizia oggi a promuoverlo! <br> In questa sezione sono disponibili per te annunci per comprare o scambiare spazi pubblicitari web e social. <br>
                            Anche se vuoi iniziare a monetizzare il tuo portale questo è il luogo giusto per te, inserisci il tuo annuncio e scopri subito se qualcuno è interessato ai tuoi spazi.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--blocco altro -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <a href="altro.php" rel="follow"> <img class="img-fluid rounded-circle" src="img/017.jpg" alt="Inserzioni per grafiche, asssistenza online, app, scambio mail ed altro " style="max-width:60%;" /> </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-7">
                        <a href="altro.php" rel="follow">
                            <h3 style="color:black;" class="display-4">Altro</h3>
                        </a>
                        <p style="color:black;font-family: 'Viga', sans-serif; ">Se hai o vorresti comprare dei prodotti digitali ma non rientrano nelle precedenti categorie, pubblica qui la tua inserzione. <br> Non ci sono limiti alla tua creatività: grafiche; plug in; app; redazione di siti; scambio di link, e molte altre opzioni!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--tasto ritorna su -->
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up" Style="color:red;"> </i></a>
    <!--ritorna su -->

    <!-- Footer -->

   <footer class=" container-fluid" style="background-color:black; position:relative; bottom:0; width:100%; ">
        <p style="font-family: 'Alfa Slab One', cursive; font-size:30px;color:white; text-align:center;"> Seguici su </p>
        <div style="text-align:center;">


            <ul class="social">

                <li>
                    <a href="https://www.facebook.com/Vendoaccount-1075891192593687" target="_blank" rel="nofollow">
                        <span class="icon fa fa-facebook" style="font-size:1.5rem;"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/vendoaccount.it/" target="_blank" rel="nofollow">
                        <span class="icon fa fa-instagram " style="font-size:1.5rem;"></span>
                    </a>
                </li>
            </ul>

        </div>

        <p style="font-family: 'Alfa Slab One', cursive; font-size:15px; color:grey; text-align:center;"> <a href='privacy.php' rel="nofollow"> Privacy </a> - <a href='regolamento.php' rel="nofollow"> Regolamento </a> </p>
        <p style="font-family: 'Alfa Slab One', cursive; font-size:10px; color:grey; text-align:center;"><br> Sito e grafiche realizzate da Marco Dondo - 2018 <span class="fa fa-creative-commons"> </span> <br> <a href="mailto: vendoaccount@altervista.org "> vendoaccount@altervista.org &nbsp;<span class="fa fa-envelope-o"></span></a> </p>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- freccia che va su -->
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200); // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() { // When arrow is clicked
        $('body,html').animate({
            scrollTop: 0 // Scroll to top of body
        }, 500);
    });

</script>


<!-- alert di registrazione -->
<script type="text/javascript">
    function mostraMessaggio() {
        window.alert("Prima devi fare l'accesso");
    }

</script>


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
