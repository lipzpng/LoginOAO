<?php
if($_POST){
  include('classes/conexao.php');
  include('classes/usuarioDAO.php');

  $usuario = new UsuarioDAO();

  $login = addslashes($_POST['login']);
  $senha = addslashes($_POST['senha']);

  $user = $usuario->login($login,$senha);

  if($user == true){
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location: admin.php');
  }else{
    header('location: index.php?erro=senha');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login de usuario</title>
</head>
<body>
    
<?php
    if(isset($_GET['erro'])){
    echo '<div class="alert alert-danger">Dados de login incorreto</div>';
    }
    if(isset($_GET['success'])){
    echo '<div class="alert alert-success">Deslogado com sucesso!</div>';
    }
?>

<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/formLogin.png" alt="Image" class="img-fluid">
        </div>

        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Logar</h3>             
            </div>
            
            <form action="#" method="post" >
              <div class="form-group first">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" name="login" id="username">
              </div>

              <div class="form-group last mb-4">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="senha" id="password">  
              </div>
              
              <input type="submit" value="Logar" class="btn btn-block btn-primary">

              <div class="align-items-center">
                <span class="ml-auto"><a href="cadastro.php" class="forgot-pass">Cadastre-se agora!</a></span> 
              </div>

              <span class="d-block text-left my-4 text-muted">&mdash; Ou entre com suas redes sociais &mdash;</span>

              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>

</body>
</html>