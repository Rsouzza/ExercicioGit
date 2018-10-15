<?php
function umaFuncao() {
echo "Uma função que imprime".PHP_EOL;
}
function outraFuncao($nome){
echo "Olá, {nome}!".PHP_EOL;
}

function outraFuncao($nome){
echo "Olá,{$nome}!Eu sou umaFuncao!".PHP_EOL;
}

function novaFuncao($msg){
echo "Sou uma funcao que recebe:{$msg}".PHP_EOL;
}

?>
