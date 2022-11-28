<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotação</title>
    <link rel="stylesheet" href="css/arquivo.css">
</head>
<body>
    <div class="Bloco">

        <h1>Anotações</h1>

<form method="get">

<input type="text" name="Titulo" id="Titulo-Assinatura" Atributo maxlength = "20">

<textarea  name="Texto"
Atributo maxlength = "100">
</textarea>

<input type="text" name="Assinatura" id="Titulo-Assinatura" Atributo maxlength = "20">

<input type="submit" name="Anexar-Texto" id="botao">



</form>
</div>





</body>
</html>

<?php


require 'connection.php';


if(isset($_GET['Anexar-Texto'])){
    $erro = array();
    
    
    $Titulo = $_GET['Titulo'];
    $Texto = $_GET['Texto'];
    $Assinatura = $_GET['Assinatura'];
    

 
    if ($Titulo == null){
        $erro[] = "Preencha o titulo";
    }
    if ($Texto == null){
        $erro[] = "Preencha o Texto";
    }
    if ($Assinatura == null){
        $erro[] = "Preencha o Assinatura";
    }
    if (!empty($erro))
    foreach($erro as $erros){
      echo "<li>$erros</li>";
    }else{
        $statement = $banco->prepare('INSERT INTO Anotacao (Titulo, Texto, Assinatura, Id_login) values(:Titulo, :Texto, :Assinatura, :Id_login)');
        $statement->bindParam(':Titulo', $Titulo);
        $statement->bindParam(':Texto', $Texto);
        $statement->bindParam(':Assinatura', $Assinatura);
        $statement->bindParam(':Id_login', $_SESSION['IdUser']);
        $statement->execute();
    }

}

?>