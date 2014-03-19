<?php require_once('database.php');

session_start();
$suma =0;
if(isset($_GET['p'])){
	$_SESSION['producto'][$_SESSION['contador']]=$_GET['p'];
	$_SESSION['contador']++;
}
echo "<table>";
for($i=0;$i< $_SESSION['contador'];$i++){
	//echo "Producto: ".$_SESSION['producto'][$i]."<br>";
	$query = "SELECT * FROM productos WHERE id="."".$_SESSION['producto'][$i]."";
	//$query = "SELECT * FROM productos WHERE id="."3";
	$resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");
    while ( $row = mysql_fetch_array($resultado)){
    	echo "<tr><td>".$row['nombre']."</td><td>" .$row['precio']."</td></tr>";
    	$suma += $row['precio'];
	}
}
echo "<tr><td>Total: </td><td> ".$suma."</td></tr>";
echo "</table>";
?>
