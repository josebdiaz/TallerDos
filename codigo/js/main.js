$ (document).ready(inicio)
function inicio(){
	$(".botoncompra").click(agregar)
	$("#carrito").load("includes/carrito.php");
} 
function agregar(){
	$("#carrito").load("includes/carrito.php?p="+$(this).val());

}