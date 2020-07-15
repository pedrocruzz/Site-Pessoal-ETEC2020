<?php
require_once 'classes/Alunos.php';

$id = $_GET['id'];
$alunos = new Alunos($id);

$alunos->excluir();

header('Location: controle.php');
?>