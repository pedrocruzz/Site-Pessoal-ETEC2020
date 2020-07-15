<?php
  require_once 'classes/Alunos.php';
  $aluno = new Alunos();
  $lista = $aluno->listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="row">
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap
        flex-md-nowrap align-items-center pt-3 pb-2">
      <h2>Alunos Listar</h2>
    </div> 
    <a class="btn btn-primary mb-3" href="index.php">Voltar ao site</a>
    <div class="container">
        <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Comentario</th>
            <th>Confirmacao</th>
          </tr>
        </thead>
        <tbody> 
        <?php foreach ($lista as $linha): ?>
          <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['email'] ?></td>
            <td><?php echo $linha['Comentario'] ?></td>
            <td><?php echo $linha['confirmacao'] ?></td>
            <td>
              <a href="alunos-excluir-modelo.php?id=<?php echo $linha['id'] ?>"
                 class="btn btn-sm btn-danger">Excluir</a>
                 <a href="alunos-aceitar.php?nome=<?php echo $linha['confirmacao'] ?>"
                 class="btn btn-sm btn-success">Aceitar</a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
</main>

</body>
</html>

<?php require_once 'controle.php' ?>