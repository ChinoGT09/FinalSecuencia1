<?php 
header("Content-Type: text/html;charset=utf-8");

if(! empty($_GET)){
    //se enviaron parametros por el método _GET
    $Nombre=(isset($_GET["nombre"])?$_GET["nombre"]:"ninguno");
    $Precio=(isset($_GET["precio"])?$_GET["precio"]:"");
    $Modelo=(isset($_GET["modelo"])?$_GET["modelo"]:"");
    $Stock=(isset($_GET["stock"])?$_GET["stock"]:"");
   
    http_response_code(200);

    echo $Nombre.",".$Precio.",".$Modelo.",".$Stock;
}else{
    http_response_code(400);
    echo "sin datos recibidos";
}
exit();
?>