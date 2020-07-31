<?php

$host = 'localhost';
$user = 'root';
$password = '123456';
$database = 'eleitor';
$conn = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conn, "utf8");

if (mysqli_connect($host, $user, $password, $database)) {
    echo "";
} else {
    echo "";
}

function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
}

function mostra_data($data) {
    $d = explode('-', $data);
    $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
    return $escreve;
}
