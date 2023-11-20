<?php
$servidor = "localhost";
$usuario = "root"; 
$senha = ""; 
$nomedb ="cadastro_de_clientes"; 

$conn = mysqli_connect($servidor, $usuario, $senha, $nomedb);

if(!$conn){
   die("Conexão falhada" . mysqli_connect_error()); 
}
//echo("conexão com Sucesso"); 