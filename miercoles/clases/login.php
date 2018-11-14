<?php


if (isset($_SESSION['usuario'])) {
    header('Location: perfilUsuario.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $usuario = $_POST['usuario'];
    require('dbMySQL.php');

    $consulta = conn ->prepare('SELECT * FROM usuarios WHERE email=:email AND password =:password');
    $consulta = execute(array('usuario')=>$usuario, 'password'=>$password);

    $resultado= $consulta->fetch();
    if ($resultado!==false) {
      $_SESSION['usuario']=$usuario;
      header('Location: ../registro/perfilUsuario.php.php');
    }
    else {
      header('Location: register.php');
    }
}
