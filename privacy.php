<!--avvio di sessione php -->
<?php

session_start();

require 'connessione.php';


?>



<!DOCTYPE html>
<html lang="it">

<head>
    <title>Privacy </title>
    <meta charset="utf-8">
    <meta name="keywords" content="Privacy vendoaccount">
    <meta name="author" content="Marco Dondo">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- collegamenti ai file -->

    <link rel="icon" href="img/favicon.ico" />
    <!--favicon -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--freccia torna-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> <!-- social icon  -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--flippa -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- flippa -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Oswald" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Niramit|Oswald|Viga" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stile.css"> <!-- il mio stile -->

</head>

<body>
    <br>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button style="border: solid 0.4px grey; " type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                    <span class="icon-bar" style="background-color:grey;"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="padding-top:4px;"><img src="img/logobianco.png" style="width:180px;" alt="advertising" /></a>
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
		  
		 echo " <li ><a href='profilo.php'  style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'> inserisci annuncio <span class='fa fa-plus-square-o'>  </a> </li>";
	
}
else{
				  echo " <li><a href=''onclick='mostraMessaggio()' style='font-size:25px;padding-top:30px; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0'>  inserisci annuncio <span class='fa fa-plus-square-o'> </span> </a> </li>";
			  }
			  ?>




                    <li>
                        <form action="tuttiann.php">
                            &nbsp;&nbsp; <button name="tutti" class="btn-link" style="padding-top:2.2rem; font-family: Staatliches, cursive; font-size:25px; color:#E0E0E0">Guarda gli annunci <span class="fa fa-shopping-bag"> </span> </button></form>
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
        <h1>Informativa sulla Privacy</h1>


        <p>Data di entrata in vigore: November 09, 2018</p>


        <p>Marco Dondo ("noi" o "nostro") gestisce il www.vendoaccount.it sito web (in app resso il "Servizio").</p>

        <p>Questa pagina vi informa delle nostre politiche riguardanti la raccolta, l'uso e la divulgazione dei dati personali quando usate il nostro Servizio .</p>

        <p>Utilizziamo i vostri dati per fornire e migliorare il Servizio. Utilizzando il Servizio, accettate la raccolta e l'utilizzo delle informazioni in conformità con questa informativa. Se non diversamente definito nella presente Informativa sulla privacy, i termini utilizzati nella presente Informativa hanno la stessa valenza dei nostri Termini e condizioni, accessibili da www.vendoaccount.it</p>

        <h2>Definizioni</h2>
        <ul>
            <li>
                <p><strong>Servizio</strong></p>
                <p>Il Servizio è il sito www.vendoaccount.it gestito da vendoaccount</p>
            </li>
            <li>
                <p><strong>Dati personali</strong></p>
                <p>I Dati personali sono i dati di un individuo vivente che può essere identificato da quei dati (o da quelli e altre informazioni in nostro possesso o che potrebbero venire in nostro possesso).</p>
            </li>
            <li>
                <p><strong>Dati di utilizzo</strong></p>
                <p>I dati di utilizzo sono i dati raccolti automaticamente generati dall'utilizzo del Servizio o dall'infrastruttura del Servizio stesso (ad esempio, la durata della visita di una pagina).</p>
            </li>
            <li>
                <p><strong>Cookies</strong></p>
                <p>I cookie sono piccoli file memorizzati sul vostro dispositivo (computer o dispositivo mobile).</p>
            </li>
        </ul>

        <h2>Raccolta e uso delle informazioni</h2>
        <p>Raccogliamo diversi tipi di informazioni per vari scopi, per fornire e migliorare il nostro servizio.</p>

        <h3>Tipologie di Dati raccolti</h3>

        <h4>Dati personali</h4>
        <p>Durante l'utilizzo del nostro Servizio, potremmo chiedervi di fornirci alcune informazioni di identificazione personale che possono essere utilizzate per contattarvi o identificarvi ("Dati personali"). Le informazioni di identificazione personale possono includere, ma non sono limitate a:</p>

        <ul>
            <li>Indirizzo email</li>
            <li>Nome e cognome</li>
            <li>Cookie e dati di utilizzo</li>
        </ul>

        <h4>Dati di utilizzo</h4>

        <p>Potremmo anche raccogliere informazioni su come l'utente accede e utilizza il Servizio ("Dati di utilizzo"). Questi Dati di utilizzo possono includere informazioni quali l'indirizzo del protocollo Internet del computer (ad es. Indirizzo IP), il tipo di browser, la versione del browser, le pagine del nostro servizio che si visita, l'ora e la data della visita, il tempo trascorso su tali pagine, identificatore unico del dispositivo e altri dati diagnostici.</p>

        <h4>Tracciamento; dati dei cookie</h4>
        <p>Utilizziamo cookie e tecnologie di tracciamento simili per tracciare l'attività sul nostro Servizio e conservare determinate informazioni.</p>
        <p>I cookie sono file con una piccola quantità di dati che possono includere un identificatore univoco anonimo. I cookie vengono inviati al vostro browser da un sito web e memorizzati sul vostro dispositivo. Altre tecnologie di tracciamento utilizzate sono anche beacon, tag e script per raccogliere e tenere traccia delle informazioni e per migliorare e analizzare il nostro Servizio.</p>
        <p>Potete chiedere al vostro browser di rifiutare tutti i cookie o di indicare quando viene inviato un cookie. Tuttavia, se non si accettano i cookie, potrebbe non essere possibile utilizzare alcune parti del nostro Servizio.</p>
        <p>Esempi di cookie che utilizziamo:</p>
        <ul>
            <li><strong>Cookie di sessione.</strong> Utilizziamo i cookie di sessione per gestire il nostro servizio.</li>
            <li><strong>Cookie di preferenza.</strong> Utilizziamo i cookie di preferenza per ricordare le vostre preferenze e varie impostazioni.</li>
            <li><strong>Cookie di sicurezza.</strong> Utilizziamo i cookie di sicurezza per motivi di sicurezza.</li>
        </ul>

        <h2>Uso dei dati</h2>
        <p>vendoaccount utilizza i dati raccolti per vari scopi:</p>
        <ul>
            <li>Per fornire e mantenere il nostro Servizio</li>
            <li>Per comunicare agli utenti variazioni apportate al servizio che offriamo</li>
            <li>Per permettere agli utenti di fruire, a propria discrezione, di funzioni interattive del nostro servizio</li>
            <li>Per fornire un servizio ai clienti</li>
            <li>Per raccogliere analisi o informazioni preziose in modo da poter migliorare il nostro Servizio</li>
            <li>Per monitorare l'utilizzo del nostro Servizio</li>
            <li>Per rilevare, prevenire e affrontare problemi tecnici</li>
        </ul>

        <h2>Trasferimento dei dati</h2>
        <p>Le vostre informazioni, compresi i Dati personali, possono essere trasferite a - e mantenute su - computer situati al di fuori del vostro stato, provincia, nazione o altra giurisdizione governativa dove le leggi sulla protezione dei dati possono essere diverse da quelle della vostra giurisdizione.</p>
        <p>Se ci si trova al di fuori di Italy e si sceglie di fornire informazioni a noi, si ricorda che trasferiamo i dati, compresi i dati personali, in Italy e li elaboriamo lì.</p>
        <p>Il vostro consenso alla presente Informativa sulla privacy seguito dall'invio di tali informazioni rappresenta il vostro consenso al trasferimento.</p>
        <p>vendoaccount adotterà tutte le misure ragionevolmente necessarie per garantire che i vostri dati siano trattati in modo sicuro e in conformità con la presente Informativa sulla privacy e nessun trasferimento dei vostri Dati Personali sarà effettuato a un'organizzazione o a un paese a meno che non vi siano controlli adeguati dei vostri dati e altre informazioni personali.</p>

        <h2>Divulgazione di dati</h2>

        <h3>Prescrizioni di legge</h3>
        <p>vendoaccount può divulgare i vostri Dati personali in buona fede, ritenendo che tale azione sia necessaria per:</p>
        <ul>
            <li>Rispettare un obbligo legale</li>
            <li>Proteggere e difendere i diritti o la proprietà di vendoaccount</li>
            <li>Prevenire o investigare possibili illeciti in relazione al Servizio</li>
            <li>Proteggere la sicurezza personale degli utenti del Servizio o del pubblico</li>
            <li>Proteggere contro la responsabilità legale</li>
        </ul>

        <h2>Sicurezza dei dati</h2>
        <p>La sicurezza dei vostri dati è importante per noi, ma ricordate che nessun metodo di trasmissione su Internet o metodo di archiviazione elettronica è sicuro al 100%. Pertanto, anche se adotteremo ogni mezzo commercialmente accettabile per proteggere i vostri Dati personali, non possiamo garantirne la sicurezza assoluta.</p>

        <h2>Fornitori di servizi</h2>
        <p>Potremmo impiegare società e individui di terze parti per facilitare il nostro Servizio ("Fornitori di servizi"), per fornire il Servizio per nostro conto, per eseguire servizi relativi ai Servizi o per aiutarci ad analizzare come viene utilizzato il nostro Servizio.</p>
        <p>Le terze parti hanno accesso ai vostri Dati personali solo per eseguire queste attività per nostro conto e sono obbligate a non rivelarle o utilizzarle per altri scopi.</p>

        <h3>Statistiche</h3>
        <p>Potremmo utilizzare i Fornitori di servizi di terze parti per monitorare e analizzare l'utilizzo del nostro servizio.</p>
        <ul>
            <li>
                <p><strong>Google Analytics</strong></p>
                <p>Google Analytics è un servizio di analisi web offerto da Google che tiene traccia e segnala il traffico del sito web. Google utilizza i dati raccolti per tracciare e monitorare l'utilizzo del nostro Servizio. Questi dati sono condivisi con altri servizi di Google. Google può utilizzare i dati raccolti per contestualizzare e personalizzare le inserzioni della propria rete pubblicitaria.</p>
                <p>Potete decidere di non rendere disponibile la vostra attività sul Servizio a Google Analytics installando il componente aggiuntivo del browser per la disattivazione di Google Analytics. Il componente aggiuntivo impedisce a JavaScript di Google Analytics (ga.js, analytics.js e dc.js) di condividere informazioni con Google Analytics sull'attività delle visite.</p>
                <p>Per ulteriori informazioni sulle prassi relative alla privacy di Google, vi preghiamo di visitare la pagina web con i Termini della privacy di Google: <a href="https://policies.google.com/privacy?hl=en">https://policies.google.com/privacy?hl=en</a></p>
            </li>
        </ul>


        <h2>Link ad altri siti</h2>
        <p>OIl nostro servizio può contenere collegamenti ad altri siti non gestiti da noi. Cliccando su un link di terze parti, sarete indirizzati al sito di quella terza parte. Ti consigliamo vivamente di rivedere l'Informativa sulla privacy di ogni sito che visiti.</p>
        <p>Non abbiamo alcun controllo e non ci assumiamo alcuna responsabilità per il contenuto, le politiche sulla privacy o le pratiche di qualsiasi sito o servizio di terzi.</p>


        <h2>Privacy dei minori</h2>
        <p>Il nostro servizio non si rivolge a minori di 18 anni .</p>
        <p>Non raccogliamo consapevolmente informazioni personali relative a utenti di età inferiore a 18 anni. Se siete un genitore o tutore e siete consapevoli che vostro figlio ci ha fornito Dati personali, vi preghiamo di contattarci. Se veniamo a conoscenza del fatto che abbiamo raccolto Dati personali da minori senza la verifica del consenso dei genitori, adotteremo provvedimenti per rimuovere tali informazioni dai nostri server.</p>


        <h2>Modifiche alla presente informativa sulla privacy</h2>
        <p>Potremmo aggiornare periodicamente la nostra Informativa sulla privacy. Ti informeremo di eventuali modifiche pubblicando la nuova Informativa sulla privacy in questa pagina.</p>
        <p>Vi informeremo via e-mail e / o un avviso di rilievo sul nostro Servizio, prima che la modifica diventi effettiva e aggiorneremo la "data di validità" nella parte superiore di questa Informativa sulla privacy.</p>
        <p>Si consiglia di rivedere periodicamente la presente Informativa sulla privacy per eventuali modifiche. Le modifiche a tale informativa sulla privacy entrano in vigore nel momento in cui vengono pubblicate su questa pagina.</p>


        <h2>Contattaci</h2>
        <p>In caso di domande sulla presente Informativa sulla privacy, si prega di contattarci:</p>
        <ul>
            <li>Tramite e-mail:vendoaccount@altervista.org</li>

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
