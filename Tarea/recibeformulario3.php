<?php 
header("Content-Type: text/html;charset=utf-8");

if(! empty($_GET)){
    //se enviaron parametros por el método _GET
    $Nombre=(isset($_GET["nombre"])?$_GET["nombre"]:"ninguno");
    $IdEmpleado=(isset($_GET["idEmpleado"])?$_GET["idEmpleado"]:"");
    $Email=(isset($_GET["email"])?$_GET["email"]:"");
    $Password=(isset($_GET["password"])?$_GET["password"]:"");
   
    http_response_code(200);

    echo $Nombre.",".$IdEmpleado.",".$Password.",".$Email;
}else{
    http_response_code(400);
    echo "sin datos recibidos";
}
exit();
?>