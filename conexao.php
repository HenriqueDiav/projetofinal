<?php

if (!isset($_SESSION)) {
    session_start();
}

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "crudbom";

$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);

if (!$conexao) {
    echo "erro ao conectar ao banco";
}

?>