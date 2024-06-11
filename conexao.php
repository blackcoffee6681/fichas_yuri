<?php

$usuario = 'root';
$senha = '';
$db = 'rpg_cyberpunk_db';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$db);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: ".$mysqli->error);
}
