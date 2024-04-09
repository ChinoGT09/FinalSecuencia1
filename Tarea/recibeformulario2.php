<?php 
header("Content-Type: text/html;charset=utf-8");

if(! empty($_GET)){
    //se enviaron parametros por el método _GET
    $Usuario=(isset($_GET["usuario"])?$_GET["usuario"]:"");
    $Producto=(isset($_GET["producto"])?$_GET["producto"]:"");
    $Cantidad=(isset($_GET["cantidad"])?$_GET["cantidad"]:"");
   
    http_response_code(200);

    echo $Usuario.",".$Producto.",".$Cantidad;
}else{
    http_response_code(400);
    echo "sin datos recibidos";
}
exit();
?>