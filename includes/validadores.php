<?php

//definindo constantes
define('TAMANHO_MIN_NOME',8);
define('TAMANHO_MAX_NOME', 40);
function nomeOk(string $nome):bool{
    return strlen($nome) >= TAMANHO_MIN_NOME && strlen($nome) <= TAMANHO_MAX_NOME;
}



//define('TAMANHO_CPF',11);
//function cpfOk(string $cpf):boolean{
 //   return strlen($cpf) = TAMANHO_CPF;
//}
?>