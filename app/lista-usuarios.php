<?php
require 'conexao.php';
$query = "SELECT * FROM usuarios";
$data = mysqli_query($conexao, $query);

?>



<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav class="navbar bg-dark border-bottom border-bottom-dark p-4 d-flex justify-content-between" data-bs-theme="dark">
    <h1 class="text-success ">Lista de Usuários</h1>
    <div class="d-flex gap-3">

      <a href="index.html"><button type="button" class="btn btn-outline-success text-white fs-4 ">Home</button></a>
      <a href="cadastro.html"><button type="button"
          class="btn btn-outline-success text-white fs-4">Cadastre-se</button></a>
    </div>
  </nav>
  <div class="container mt-4">
    <table class="table table-bordered border-black table table-dark table-striped align-middle">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"><i class="fa-solid fa-signature pe-2"></i>Nome</th>
          <th scope="col"><i class="fa-solid fa-phone pe-2"></i>Telefone</th>
          <th scope="col"><i class="fa-solid fa-cake-candles pe-2"></i>Idade</th>
          <th scope="col"><i class="fa-solid fa-envelope pe-2"></i>E-mail
          </th>
          <th scope="col"><i class="fa-solid fa-lock pe-2"></i>Senha</th>
          <th scope="col"><i class="fa-solid fa-play pe-2"></i>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($usuarios = mysqli_fetch_array($data)){
        
        ?>
        <tr>
          <th scope="row"><?php echo $usuarios['id'] ?></th>
          <td><?php echo $usuarios['nome'] ?></td>
          <td><?php echo $usuarios['telefone']?></td>
          <td><?php echo $usuarios['idade'] ?></td>
          <td><?php echo $usuarios['email'] ?></td>
          <td><?php echo $usuarios['senha'] ?></td>
          <td class="d-flex gap-3">
            <button type="button" class="btn btn-outline-primary p-2 d-inline-flex align-items-center gap-2"> <i
                class="fa-regular fa-pen-to-square"></i>Primary</button>
            <button type="button" class="btn btn-outline-danger p-2 d-inline-flex align-items-center gap-2"><i
                class="fa-solid fa-trash" style="color: #b8b8b8;"></i>Danger</button>
          </td>
        </tr>
            <?php
          }
            ?>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>