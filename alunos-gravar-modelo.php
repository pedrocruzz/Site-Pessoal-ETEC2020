<?php
require_once 'classes/Alunos.php';
$aluno = new Alunos();

$aluno->nome = $_POST['txtnome'];
$aluno->email = $_POST['txtemail'];
$aluno->Comentario = $_POST['txtComentario'];
$aluno->inserir();

header('Location: index.php');
?>