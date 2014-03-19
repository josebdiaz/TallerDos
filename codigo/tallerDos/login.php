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
        <section class="confirmacionVenta">
		<?php
		
		$contador=0;
		$query = "SELECT * FROM cliente WHERE usuario = '".$_POST['usuario']."' AND pass ='".$_POST['pass']."'";
	 	$resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");

		while ( $row = mysql_fetch_array($resultado)){
			$_SESSION['usuario']=$row['id'];
			$contador++;
			
		}
		if ($contador>0) {
			$resultado=mysql_query($query);
			
			$query = "INSERT INTO pedido VALUES (NULL,".$_SESSION['usuario'].",'".date('U')."')";
			$resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");

			$query = "SELECT * FROM pedido WHERE idCliente='".$_SESSION['usuario']."'ORDER BY fechaPedido DESC LIMIT 1";
			$resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");
			
			while ( $row = mysql_fetch_array($resultado)){
				$_SESSION['idPedido']=$row['id'];
			}
			//echo $_SESSION['idPedido'];

			for($i=0;$i< $_SESSION['contador'];$i++){
				//echo "Producto: ".$_SESSION['producto'][$i]."<br>";
				$query = "INSERT INTO lineapedido VALUES(NULL,'".$_SESSION['idPedido']."','".$_SESSION['producto'][$i]."','1')";
				//$query = "SELECT * FROM productos WHERE id="."3";
				$resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");  

				$query = "SELECT * FROM productos WHERE id='".$_SESSION['producto'][$i]."'";
                $resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");
                while ( $row = mysql_fetch_array($resultado)){
					$existencias= $row['existencias'];
					$otroQuery = "UPDATE productos SET existencias='".($existencias-1)."'WHERE id ='".$_SESSION['producto'][$i]."'";
                	$otroResultado = mysql_query($otroQuery) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");
				}

			}

			session_destroy();
        
        	echo '<h3 class="sucess">Tu pedido ha sido realizado satisfactoriamente, Haz clic  <a href="index.php">aqui</a> para volver al home</h3>';

		}else{
			echo '<h3 class="sucess">El usuario no existe, Haz clic  <a href="index.php">aqui</a> para volver al home</h3>';
		}
		?>

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

