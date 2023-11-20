
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
       <?php
      if(isset($_GET['msg'])){
      $msg = $_GET['msg'];

      echo '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      '. $msg .'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      ';
      }
       ?>
        <a href="add_novo.php" class="btn btn-dark mb-3">Add Novo</a>
        
        <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">Codigo Cliente</th>
      <th scope="col">Primeiro Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Nº de Filhos</th>
      <th scope="col">data de Nanc</th>
      <th scope="col">Email</th>
      <th scope="col">Cpf</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 <?php
 include "db_conn.php"; 
  $sql = "SELECT * FROM `clientes`"; 
  $resultado = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($resultado)){
       ?>
   <tr>
      <td><?php echo $row['codigo_cliente']  ?></td>
      <td><?php echo $row['primeiro_nome']  ?></td>
      <td><?php echo $row['sobrenome']  ?></td>
      <td><?php echo $row['sexo']  ?></td>
      <td><?php echo $row['numero_de_filhos']  ?></td>
      <td><?php echo $row['data_de_nascimento']  ?></td>
      <td><?php echo $row['email']  ?></td>
      <td><?php echo $row['cpf']  ?></td>
    

       <td>
       <a href="edit.php?codigo_cliente=<?php echo $row['codigo_cliente']?>" 
       class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3">

</i></a>  
<a href="delete.php?codigo_cliente=<?php echo $row['codigo_cliente']?>"
 class="link-dark"><i class="fa-solid fa-trash fs-5 me-3">

</i></a>                              
       </td>
    </tr>
   
       <?php
  }

?>
   
  </tbody>
</table>

     </div>
<!--Boostrap-->

<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"
></script>


</body>
</html>