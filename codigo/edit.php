
<?php
include "db_conn.php";
$codigo_cliente = $_GET['codigo_cliente']; 

if(isset($_POST['submit'])){
$primeiro_nome = $_POST['primeiro_nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
 $numero_de_filhos = $_POST['numero_de_filhos']; 
 $data_de_nascimento = $_POST['data_de_nascimento'];
 $email = $_POST['email'];
 $cpf = $_POST['cpf'];
                                    
 $sql = "UPDATE `clientes` SET  `primeiro_nome`='$primeiro_nome', `sobrenome`='$sobrenome', `sexo`='$sexo',
 `numero_de_filhos`='$numero_de_filhos', `data_de_nascimento`='$data_de_nascimento', `email`='$email', `cpf`='$cpf'
  WHERE codigo_cliente=$codigo_cliente";
 

 $resultado = mysqli_query($conn, $sql);

 if($resultado){
     // Inserção bem-sucedida, redirecione para uma página de sucesso
     header("Location: index.php?msg=Data updated Successfully"); 
     exit();
 } else {
     // Exibição de mensagem de erro
     echo "A inserção falhou: " . mysqli_error($conn);
 }

}
      

 

?>














<?php
include "db_conn.php";

if(isset($_POST['submit'])){
$primeiro_nome = $_POST['primeiro_nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
 $numero_de_filhos = $_POST['numero_de_filhos']; 
 $data_de_nascimento = $_POST['data_de_nascimento'];
 $email = $_POST['email'];
 $cpf = $_POST['cpf'];
                                    
 $sql = "INSERT INTO `clientes`(`codigo_cliente`, `primeiro_nome`, `sobrenome`, `sexo`,
 `numero_de_filhos`, `data_de_nascimento`, `email`, `cpf`) VALUES (NULL,
'$primeiro_nome', '$sobrenome', '$sexo', '$numero_de_filhos', '$data_de_nascimento', '$email', '$cpf')";
 

 $resultado = mysqli_query($conn, $sql);

 if($resultado){
     // Inserção bem-sucedida, redirecione para uma página de sucesso
     header("Location: index.php?msg=New record created Successfully"); // Substitua "sucesso.php" pela página desejada
     exit();
 } else {
     // Exibição de mensagem de erro
     echo "A inserção falhou: " . mysqli_error($conn);
 }

}
      

 

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Boostrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
">

<!-- FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>CRUD DOS CLIENTES</title>
</head>
<body>
     <nav class="navbar navbar-lingth justify-content-center fs-3 mb-5"
      style="background-color:#00ff5573; ">
        CRUD PARA OS CLIENTES
     </nav> 

     <div class="container">
         <div class="text-center mb-4">
                <h3>Editar </h3>
                <p>Lorem ipsum dolor sit amet  consequatur</p>                        

         </div>
         <?php
         
         $sql = "SELECT * FROM `clientes` WHERE codigo_cliente = $codigo_cliente LIMIT 1";
         $resultado = mysqli_query($conn,$sql);
         $row = mysqli_fetch_assoc($resultado)
         ?>
         <!--2º Conteiner -->
         <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">

            <!--PRIMEIRA LINHA--> 
              <div class="row ">
           <!-- primereiro nome: -->
                   <div class="col">
                        <label class="form-label">Primeiro Nome: </label>
                        <input type="text" class="form-control" name="primeiro_nome"
                        value="<?php echo $row['primeiro_nome'] ?> ">
                   </div>

                       <!--  sobrenome: -->
                   <div class="col">
                        <label class="form-label">Sobrenome: </label>
                        <input type="text" class="form-control" name="sobrenome"
                        value="<?php echo $row['sobrenome'] ?> ">
                   </div>


                   <!--segunda LINHA--> 
              <div class="row">
           <!-- SEXO: -->
                   <div class="col">
                        <label class="form-label">Sexo: </label>
                        <input type="text" class="form-control" name="sexo"
                        value="<?php echo $row['sexo'] ?> ">
                   </div>

                       <!--  NUMERO DE FILHOS: -->
                   <div class="col">
                        <label class="form-label">Nº de Filhos: </label>
                        <input type="number" class="form-control" name="numero_de_filhos"
                        value="<?php echo $row['numero_de_filhos'] ?> ">
                   </div>


                   <!--terceira LINHA--> 
              <div class="row">
           <!-- data de Nasc nome: -->
                   <div class="col">
                        <label class="form-label">Data de nasc: </label>
                        <input type="date" class="form-control" name="data_de_nascimento"
                        value="<?php echo $row['data_de_nascimento'] ?> ">
                   </div>

                       <!--  Email: -->
                   <div class="col">
                        <label class="form-label">Email: </label>
                        <input type="email" class="form-control" name="email"
                        value="<?php echo $row['email'] ?> ">
                   </div>

                   <!--quarta LINHA--> 
              <div class="row">
           <!-- Cpf : -->
                   <div class="col">
                        <label class="form-label">CPf: </label>
                        <input type="text" class="form-control" name="cpf"
                        value="<?php echo $row['cpf'] ?> ">
                   </div>

                   <div>
              <button type="submit" class="btn btn-sucess "
              name="submit"  style="background-color:#00ff5573">
                 Editar
              </button>
              <a href="index.php" class="btn btn-danger">Cancelar</a>
                   </div>

                  
              </div>
            </form>

         </div>

     </div>
<!--Boostrap-->

<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"
></script>


</body>
</html>