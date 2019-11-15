<!DOCTYPE html>
<html lang="it">

<head>
    <title>Registrati </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" />
    <!--favicon -->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login100-form validate-form" action='funzione-registra.php' method='post'>
                    <span class="login100-form-title p-b-55">
                        <font style="  font-family: Staatliches, cursive; "> Registrati </font>
                    </span>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name='username' placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class='fa fa-user-circle-o'></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="fa fa-envelope-o"> </span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                        <input class="input100" type="password" name="pass2" placeholder=" Conferma password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>



                    <div class="container-login100-form-btn p-t-25">
                        <button class="login100-form-btn">
                            <font style="font-size:25px;   font-family: Staatliches, cursive; "> Registrati </font>
                        </button>
                    </div>
                    <div class="text-left w-full p-t-115">
                        <a class="txt1 bo1 hov1" style=" font-size:20px; font-family: Staatliches, cursive; " onclick="goBack()">Ritorna indietro</a>
                    </div>


                </form>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }

    </script>
</body>

</html>
