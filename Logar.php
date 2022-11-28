<?php




require 'connection.php';
require 'UsuarioClass.php';





$u = new usuario();

$login = $_POST['Usuario'];
$Senha = $_POST['Senha'];

if($u->login($login, $Senha) == true){
  if(isset($_SESSION['idUser'])){
   
    header('Location: arquivo.php');
    
  }
}else{
    header('Location: index.php');
}




 



?>