<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/Cadastro.css">
</head>
<body>

<div class="Formulario">
        <h1>Cadastrar</h1>
<div class="Labels">   
    
<form action="<?php
    echo $_SERVER['PHP_SELF'];
    ?>" method="GET">

Nome
<input type="text" id="Label" name="Usuario_Cadastrar"> 
<hr id="Barrinha">

CPF
<input type="text" id="Label" name="CPF_Cadastrar"> 
<hr id="Barrinha">

Senha
<input type="password" id="Label" name="Senha_Cadastrar"> 
<hr id="Barrinha">

<input type="submit" id="botao" value="Cadastrar" name="Cadastrar">

</form>
</div> 
</div>
</body>
</html>

<?php

require 'connection.php';

if(isset($_GET['Cadastrar'])){
    $erro = array();
    
    
    $Nome_cadastrar = $_GET['Usuario_Cadastrar'];
    
    if ($Nome_cadastrar == null){
        $erro[] = " Preencha seu nome";
    }
    
    if(!$Senha_cadastro = filter_input(INPUT_GET,'Senha_Cadastrar', FILTER_VALIDATE_INT)){
        $erro[] = " Senha precisa ser um inteiro";
       }
       if(!$Cpf_cadastro = filter_input(INPUT_GET,'CPF_Cadastrar', FILTER_VALIDATE_INT)){
        $erro[] = " CPF precisa ser um inteiro";
       }
       if (!empty($erro))
       foreach($erro as $erros){
         echo "<li>$erros</li>";
       }else{
        echo "Parabens, seus dados estão corretos";
        $statement = $banco->prepare('INSERT INTO Login_usuarios (Nome, Senha, Cpf) values(:Nome, :Senha, :Cpf)');
        $statement->bindParam(':Nome', $Nome_cadastrar);
        $statement->bindParam(':Senha', $Senha_cadastro);
        $statement->bindParam(':Cpf', $Cpf_cadastro);
        $statement->execute();

        header('Location: index.php');
       }
    
    }
    
    
    
    


?>


