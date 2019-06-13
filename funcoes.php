<?php   

function tratarNome($nome){    
    $nome = mb_strtolower($nome, "utf-8");
    $nome = ucwords($nome); 
    return $nome;
}
    
?>   