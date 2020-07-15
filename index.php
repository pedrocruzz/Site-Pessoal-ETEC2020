<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pedro Cruz</title>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-light bg-light bg-white rounded">
        <div class="d-flex w-50 order-0">
            <a class="navbar-brand mr-1" href="index.php"><p class="logoItem">PEDRO CRUZ</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home"><p class="menuItem">Sobre</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hobbies"><p class="menuItem">Hobbies</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#comentario"><p class="menuItem">Comentário</p></a>
                </li>

            </ul>
        </div>
        <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"><a href="login/login.php"><img src="assets/icons/user.svg" alt=""></span></a>
    </nav>
    <!--Sobre-->
    <section id="home" class="content">
    <div class="d-flex bd-highlight mb-3">
      <div class="p-2 bd-highlight">
        <div class="jumbotron1">
            <div class="textDisplay">
            <h1 class="display-4  font-weight-bolder">Olá, eu sou o Pedro.</h1>
                <p class="lead">Tenho 16 anos, sou estudante de Desenvolvimento de Sistemas na Etec e nos meus tempos livres gosto de jogar e ouvir música.</p>
                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">
                  Contato
                </button>
            </div>
        </div>
      </div>
      <div class="itemright ml-auto p-0 bd-highlight">
        <img src="assets/img/pedrocruzimg.jpg" alt="..." class="itemright rounded float-right">
      </div>
    </div>
</div>
</section>
<!--Fotos-->
<section id="hobbies" class="content">
<div class="jumbotron3 jumbotron-fluid">
    <div class="d-flex justify-content-start">
    <h1 class="display-5 font-bolder mx-auto"></h1>
  </div>
<div class="card-group">
    <div class="card">
      <img class="card-img-top" src="assets/img/album/IMG-20190609-WA0008.jpg" alt="Card image cap">
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/img/album/img1.jpeg" alt="Card image cap">
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/img/album/20190609_005849.jpg" alt="Card image cap">
    </div>
  </div>
  <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="assets/img/album/IMG-20190524-WA0003.jpg" alt="Card image cap">
      </div>
      <div class="card">
        <img class="card-img-top" src="assets/img/album/IMG-20190524-WA0004.jpg" alt="Card image cap">
      </div>
      <div class="card">
        <img class="card-img-top" id="image6" src="assets/img/album/img2.jpeg" alt="Card image cap">
      </div>
    </div>
   </div>
<!--Stream-->

<div class="jumbotron4 jumbotron-fluid">
    <div class="container">
              <div class="d-flex justify-content-start">
              <div class="stream textDisplay">
            <h1 class="display-4  font-weight-bolder">Minhas streams favoritas</h1>
                <p class="lead">Aqui está algumas das streams que estou mais assistindo ultimamente.</p>
            </div>
                      <ul class="list-unstyled">
                <li class="media">
                <a href="https://www.twitch.tv/gaules"><img src="assets/icons/gaules.png" class="mr-3" alt="..."></a>
                  <div class="media-body">
                    <h5 class="itemStream mt-0 mb-1">Sobre Gaules</h5>
                    Mais um guerreiro da Maior Tribo do Mundo! Atuei como jogador profissional de CS por quase uma década, fui o primeiro treinador a ser campeão do mundo em 2007 com o MIBR. Acertei um pouco, errei muito, ganhei bastante coisa e tbm perdi demais! Atualmente faço live todos os dias aqui na Twitch!
                  </div>
                </li>
                <li class="media my-4">
                <a href="https://www.twitch.tv/flowpodcast"><img src="assets/icons/flow.png" class="mr-3" alt="..."></a>
                  <div class="media-body">
                    <h5 class="itemStream mt-0 mb-1">Sobre FlowPodcast</h5>
                    Flow Podcast é uma conversa descontraída, longa e livre, como um papo de boteco entre amigos. No Flow garantimos um espaço onde o convidado pode desenvolver suas ideias sem qualquer tipo de pauta ou as restrições normais de outras mídias, como agenda política/filosófica.
                  </div>
                </li>
                <li class="media">
                  <a href="https://www.twitch.tv/breeze_fps"><img src="assets/icons/breeze.png" class="mr-3" alt="..."></a>
                  <div class="media-body">
                    <h5 class="itemStream mt-0 mb-1">Sobre BREEZE_FPS</h5>
                    Meu nome é Felipe, tenho 19 anos e atualmente estou cursando Ciencias da Computação na parte da noite. Mas continuo com meu grande sonho de entrar no cenário profissional de streaming! E aqui na Twitch irei mostrar um pouco da minha trajetória ao meu grande sonho!
              </div>
                </li>
              </ul>
        </div>
    </div>
</div>
</section>
<!-- Musicas -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="d-flex justify-content-start">
            <iframe class="ifspotify"src="https://open.spotify.com/embed/album/2J1e7x33Aejx7KFmVbgoGW" width="301" height="381" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <iframe class="ifspotify"src="https://open.spotify.com/embed/album/41GuZcammIkupMPKH2OJ6I" width="301" height="381" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <div class="spotify textDisplay">
                <h1 class="display-4  font-weight-bolder">Meus álbums favoritos</h1>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">
                      Ver mais <img src="assets/icons/spotify2.svg" alt="" class="icons">
                    </button>
                </div>
            </div>
        </div>
      </div>
<!-- Comentarios -->
<section id="comentario" class="content">
<?php
  require_once 'classes/Alunos.php';
  $aluno = new Alunos();
  $lista = $aluno->aceito();
?> 
<div class="container">
  <h1 class="display-5  font-weight-bolder">Comentários</h1>  
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Comentario</th>
      </tr>
    </thead>
    <?php foreach ($lista as $linha): ?>
    <tbody>
      <tr>
        <td><?php echo $linha['nome'] ?></td>
        <td><?php echo $linha['email'] ?></td>
        <td><?php echo $linha['Comentario'] ?></td>
      </tr>
    </tbody>
    <?php endforeach ?> 
  </table>
</div>
<div class="container">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" action="alunos-gravar-modelo.php" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome</label>
                <input type="text" class="form-control" id="txtnome" placeholder="" value="" name="txtnome" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Email</label>
                <input type="email" class="form-control" id="txtemail" placeholder="" value="" name="txtemail" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Comentário</label>
                <input type="text" class="form-control" id="txtcomentario" placeholder="" value=""  name="txtComentario" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
            <hr class="mb-4">
            </div>
    </div>
    </div>
<section>
<!-- Footer -->
<footer id="fotter" class="py-1 text-white-50">
    <div class="container text-center">
      <small class="smallfooter">Copyright &copy; <b>PedroCruz</b></small></br>
      <a href="https://github.com/pedrocruzz"><img src="assets/icons/github.svg" alt="" class="icons"></a>
      <a href="https://www.instagram.com/_pedrocruz_/"><img src="assets/icons/instagram-esbocado.svg" alt="" class="icons"></a>
      <a href="https://steamcommunity.com/id/snakola"><img src="assets/icons/vapor.svg" alt="" class="icons"></a>
    </div>
  </footer>
	</body>
</html>