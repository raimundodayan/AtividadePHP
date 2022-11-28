<?php

class usuario{

public function login($login, $Senha){

global $banco;
$sql = "SELECT * FROM Login_usuarios WHERE Nome = :Nome and Senha = :Senha";
$sql = $banco->prepare($sql);
$sql->bindValue("Nome", $login);
$sql->bindValue("Senha", ($Senha));
$sql->execute();

if($sql->rowCount() > 0){
    $dado = $sql ->fetch();
    $_SESSION['IdUser'] = $dado['Id'];
    echo $_SESSION['IdUser'];
    
return true;
} else{
return false;
}

}

}






?>