<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="authen_login.php">
      <h2>LOGIN</h2>
      <label for="inputEmail" class="sr-only">Nome</label>
      <input type="text" name="user_id" id="user_id" class="form-control" placeholder="Nome">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="user_pass" id="user_pass" class="form-control" placeholder="Senha" >
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
  </body>
</html>