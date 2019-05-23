<?php

$nome_servidor="localhost";
$nome_usuario="root";
$senha="";
$nome_banco="projetop";

$conn=new mysqli($nome_servidor,$nome_usuario,$senha,$nome_banco);
if ($conn->conect_error===TRUE){
    die("asdf".$conn->conect_error);
}
?>