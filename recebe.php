<?php

//include_once serve para usar a função chamada apenas uma vez e include para usar a função chamada
include_once 'funcoes.php';

// esta linha abaixo é para chamar a função tratar nome tratarNome
$nome   = tratarNome($_POST["nome"]);
$email  = $_POST["email"];
$tel    = $_POST["tel"];

//if($nome == "" || $email == "" || $tel == "")
//if(empty($nome) || empty($email) || empty($tel))


if($nome != "" && $email != "" && $tel != "") {    
//    echo "Nome: ".$nome;
//    echo "<br>Email: ".$email;
//    echo "<br>Telefone: ".$tel;
    $arquivo = fopen("C://temp/dados.txt", "a+");
    fwrite ($arquivo, "\r\nDados do ClienteCadastrado em: ";)
    fwrite ($arquivo, "\r\nNome: ".$nome);
    fwrite ($arquivo, "\r\nE-mail: ".$email);
    fwrite ($arquivo, "\r\nTelefone: ".$tel);
    fwrite ($arquivo, "\r\n-----------------------\r\n\r\n");
    fclose($arquivo);
    
}
else {
   echo "<h4>Por favor, preencha todos os campos.</h4>"; 
}
?>

<br><br>
<a href="index.html">Página Inicial</a>