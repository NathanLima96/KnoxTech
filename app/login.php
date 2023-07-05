<?php
require 'conexao.php';
$login_query = "SELECT * FROM usuarios";
if(isset($_POST['email'])){
  
  $email = $_POST['email'];
  $senha = $_POST['senha'];

$login_query = "SELECT * FROM usuarios WHERE email = '$email'";

$exec = mysqli_query($conexao, $login_query);

$parsed_user = mysqli_fetch_row($exec);

if($parsed_user && password_verify($senha, $parsed_user[5])){
header('Location:index.html');
}else{
  echo "<script>
            window.addEventListener('DOMContentLoaded', function() {
              var erroElement = document.getElementById('erro');
              erroElement.innerText = 'Email ou senha inválidas!';
              erroElement.style.color = 'red';
            });
          </script>";
}
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<header>
    <div class="logo">Knox Tech</div>
    <nav class="nav-bar">
      <a id="nav-item" href="index.html">Home</a>
      <a id="nav-item" href="lista-usuarios.php">Lista de Usuarios</a>
      <a class="icons" target="_blank" href="https://www.instagram.com/knox.tech_/"><i
          class="fa-brands fa-instagram"></i></a>
      <a class="icons" target="_blank" href="#"><i class="fa-brands fa-whatsapp"></i></a>
      <a class="icons" target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
      <div class="mobile-menu-icon">
        <div class="logo-mobile">Knox Tech</div>
        <button onclick="menuShow()" class="menu-icon"><img class="icon" src="imagens/menu_white_36dp.svg"
            alt=""></button>
      </div>
    </nav>
  </header>

  <!-- inicio Header mobile responsivo-->
  <div class="header-mobile">
    <nav class="nav-mobile">
      <div class="conteudo-mobile">
        <a id="nav-item" href="index.html">Home</a>
        <a id="nav-item" href="lista-usuarios.php">Lista de Usuarios</a>
        <div class="content-icons">
          <a class="icons" target="_blank" href="https://www.instagram.com/knox.tech_/"><i
              class="fa-brands fa-instagram"></i></a>
          <a class="icons" target="_blank" href="#"><i class="fa-brands fa-whatsapp"></i></a>
          <a class="icons" target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
      </div>

      <!-- Fim Header mobile responsivo-->

    </nav>
    <div class="mobile-close-icon">
      <button class="close-icon"><img class="icon" src="imagens/close_white_36dp.svg" alt=""></button>
    </div>
  </div>
  <!-- Fim Header mobile responsivo-->
  <main class="container">
    <div class="form-body">
      <div class="txt">
        <h1> Entre em contato com a Knox Tech</h1>
        <p>Entre em contato conosco para consertar seu celular, notebook, tablet ou computador. Nós somos os
          especialistas da Knox Tech!</p>
      </div>
      <form method="post" action="">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        
        <div id="erro"></div>
        <div class="register-container">
          <button class="botao">Logar</button>
          <a href="cadastro.html">Não possui uma conta?</a>
        </div>
      </form>
      
    </div>
  </main>
  <div class="localizacao">
    <div class="mapa">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14631.730269815222!2d-52.599893404242366!3d-23.534927636794265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed53b79e8455db%3A0x6603b79859e489e1!2zU8OjbyBUb23DqSwgUFIsIDg3MjIwLTAwMA!5e0!3m2!1spt-BR!2sbr!4v1688408332475!5m2!1spt-BR!2sbr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="txt">
      <h1>Localizaçao</h1>
      <p>erro Nº 1234</p>
    </div>
  </div>

  <!-- Inicio do rodapé-->
  <footer>
    <div class="logo">Knox Tech</div>
    <div class="nav-footer">
      <a id="item-footer" href="index.html">Home</a>
      <a id="item-footer" href="cadastro.html">cadastro</a>
      <a class="icons-footer" target="_blank" href="https://www.instagram.com/knox.tech_/"><i
          class="fa-brands fa-instagram"></i></a>
      <a class="icons-footer" target="_blank" href="#"><i class="fa-brands fa-whatsapp"></i></a>
      <a class="icons-footer" target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
    </div>
  </footer>
  <!-- Fim do rodapé-->

  <script src="Script.js"></script>
</body>

</html>