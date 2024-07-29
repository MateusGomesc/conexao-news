<?php

$connection = mysqli_connect('localhost', 'root', 'Mateus31#', 'conexao-news');

if(!$connection){
    echo "Ocorreu um erro." . PHP_EOL;
    echo "Erro number: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error: " . mysqli_connect_error() . PHP_EOL;
}

// echo "Conexão realizada!" . PHP_EOL;