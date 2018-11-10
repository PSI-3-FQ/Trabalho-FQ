<?php
$host = "195.201.245.104";
$user = "bestcoun_psi3";
$password = "%2Ma*1Zq9.&=";
$db = "bestcoun_trabalho_fq";

$conn = new mysqli($host, $user, $password);

if(!$conn->connection_error){
    echo "conectado com sucesso";
}else{
    echo "erro ao conectar";
}