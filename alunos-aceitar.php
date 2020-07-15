<?php
require_once 'classes/Alunos.php';

$confirmacao = ['confirmacao'];
$alunos = new Alunos($confirmacao);

$alunos->aceitar();

header('Location: controle.php');
?>
