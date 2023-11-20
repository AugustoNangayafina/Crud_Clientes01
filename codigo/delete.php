<?php
include "db_conn.php";
$codigo_cliente = $_GET['codigo_cliente'];
$sql = "DELETE FROM `clientes` WHERE codigo_cliente = $codigo_cliente";
$resultado = mysqli_query($conn, $sql); 

if($resultado){
   header("Location: index.php?msg=Record deleted sucessfully"); 
}
else{
echo "FALHA" . mysqli_error($scon); 
}

?>