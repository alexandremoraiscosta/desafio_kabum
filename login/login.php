<?php 

function login() {
    
    if (!empty($_POST['login'])) {

      $login = $_POST['login'];

      $admin = verifyIfAdmin($login);
      if($admin['id']) {
        $_SESSION["login"] = $admin;
      }
     
      header("location: index.php");
    }
}

if($_GET['sair']){
  unset($_SESSION["login"]);
  header("location: index.php");
}

?>