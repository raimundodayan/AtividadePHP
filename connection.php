


<?php




session_start();

$localhost = "localhost";
$Senha = "opera5987321";
$database = "Atividade";
$user = "root";


global $banco;

try{
$banco = new PDO("mysql:host=$localhost;dbname=$database", $user, $Senha);
$banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $r){

    echo "ERRO: ".$r->getMessage();
    exit;
}






?>

