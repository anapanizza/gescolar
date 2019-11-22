<?php

// caso o usuario clique em sair
if(isset($_REQUEST['Sair'])) {

     unset($_SESSION['gescolar_dados_usuario']); //destroi a sessao de autenticacao do usuario
     header("location: login.php"); //redireciona para a pagina de login
}

//protegendo a pagina contra acesso sem autenticacao
if(!isset($_SESSION['gescolar_dados_usuario'])) {
     header("location: login.php"); //redireciona para o login.
}

// abreviando o nome da variavel que contem os dados do usuario
$usuario = $_SESSION['gescolar_dados_usuario'];

?>
<!DOCTYPE html>
<html>
     <head>
         <link href="css/estilos.css" type="text/css" rel="stylesheet"/>
     </head>
     <body>
         <div id="global">

              <!--exibindo o nome do usuario que esta guardado na sessao, com os outros dados -->
              <h1> GESCOLAR <small>, Bem-vindo <?= $usuario['nome'] ?> </small> </h1>

              <?php include_once 'includes/cabecalho.php' ?>
       </div>
     </body>
</html>