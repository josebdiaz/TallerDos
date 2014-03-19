<?php require_once('includes/database.php');
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;
}
?>

<!DOCTYPE html>
    <html class="no-js">
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
        <div class="subtitulo">
            <h2 class="destacados">
            Peliculas compradas por Thimael
            </h2>
        </div>
        
           
        
        <?php
                //$query = "SELECT * FROM productos WHERE destacado >0 AND existencias >0";
                //$query ="SELECT 'productos.imagen','productos.nombre','productos.descripcion','productos.precio','pedido.fechaPedido' FROM productos LEFT JOIN lineapedido ON 'lineapedido.idProducto'='productos.id' LEFT JOIN pedido ON 'pedido.id'= 'lineapedido.idPedido' LEFT JOIN cliente ON 'cliente.id'='pedido.idCliente' WHERE 'cliente.id'=1";

                $query= "SELECT productos.id, productos.imagen,productos.nombre,productos.descripcion,productos.precio,pedido.fechaPedido FROM productos LEFT JOIN lineapedido ON lineapedido.idProducto=productos.id LEFT JOIN pedido ON pedido.id= lineapedido.idPedido LEFT JOIN cliente ON cliente.id=pedido.idCliente WHERE cliente.id=2 ORDER BY pedido.fechaPedido ASC ";

                $resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");

                while ( $row = mysql_fetch_array($resultado)){
                    echo "<article id='".$row["id"]."'>";
                    echo "<div class= 'imagen'>";
                    echo "<img class='imgPost' src='img/".$row["imagen"]."'/>";
                    echo "</div>";
                    echo "<div class= 'informacion'>";
                    echo "<h2 class='nombreProducto'>".$row["nombre"]."</h2>";
                    echo "<p class='infoProducto'>".$row["descripcion"]."</p>";
                    echo "<p class='precioProducto'>Precio: $".$row["precio"]."</p>";
                    echo "<p class='precioProducto'>Comprado el día: ".date("M/d/Y | H:i:s A",$row["fechaPedido"])."</p>";
                    echo "</article>";
                }
            ?>


        </section>

        <footer id="elFooter">
            <h4>(c) José Bolaños 2014</h4>
        </footer>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>