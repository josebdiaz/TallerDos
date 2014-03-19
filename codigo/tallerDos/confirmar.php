<?php require_once('includes/database.php');
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>This is a legit Movie store</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/estilos.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header id="elHeader">
            <div id="titulote">
                <a href="index.php"><h1 class="tituloprimario">Legit Movie Store</h1></a>
            </div>
            <div id="botonesh">
                <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogo.php">Catalogo</a></li>
                    <li><a href="profile.php?id=1">Profile</a></li>

                </ul>
            </nav>    
            </div>
        </header>
        <section>
        <div class="contenedorCarrito">
            <p>Carrito</p>
            <div id="carrito">
                
                
            </div>
            <div class="botonesCarrito">
            <nav>
                <ul>
                    <li><a href="includes/destruir.php">Limpiar</a></li>
                    <li><a href="confirmar.php">Comprar</a></li>
                </ul>
            </nav>   
            </div>
        </div>
            
        </section>

        <section>
        <div class="subtitulo">
            <h2 class="destacados">
            Inicia sesion para confirmar tu compra
            </h2>
            </div>
            <div id="elFormulario">
            <form class = "formulario" action="login.php" method="POST">
                <table>
                    <tr><td>Usuario:</td><td><input  type="text" name="usuario" placeholder="El usuario es thimael"><br></td></tr>
                    <tr><td>Contraseña: </td><td><input  type="password" name="pass" placeholder="La contraseña es thimael"><br></td></tr>
                    <tr><td></td><td><input type="submit"></td></tr>
                </table>
            </form>
            </div>
        </section>

        <footer id="elFooter">
            <p>(c) José Bolaños 2014</p>
        </footer>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
