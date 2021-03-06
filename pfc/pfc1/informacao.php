<!DOCTYPE html>
<head xmlns="http://www.w3.org/1999/html">
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">

    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>

    <style>
        body  {
            background-color: white;
        }
    </style>
</head>
<body>
<div class="container">

  <?php
  session_start();
  if (isset($_SESSION["idusuario"])) {
      if ($_SESSION["tipo_usuario"] == 2) {
          require("header_admin.php");
      }
      else {
          require("header.php");
      }
  }
  else{
      require("header.php");
  }
  ?>
    <h1>Notícias</h1>
    <div class="row demo-row">

    <div class="col-xs-12">
        <div class="jumbotron" id="noticia">
            <blockquote>
                22 de Setembro de 2016
            </blockquote>
            <img class="img-rounded img-responsive" src="http://im.ziffdavisinternational.com/ign_br/screenshot/default/fb-image-sd_kqmf.jpg">
        <h3>TwitchCon 2016 terá arena de e-sports, Steve Aoki e outras atrações</h3>
        <p align="justify">A TwitchCon 2016, evento que ocorre entre 30 de setembro e 2 de outubro em San Diego, nos Estados Unidos, terá diversas atrações com streamers da plataforma de transmissões. Além da arena de eSports, os DJs Steve Aoki, Darude e o rapper T-Pain também vão marcar presença na feira.
            Uma das grandes atrações do evento será a TwitchCon: The Party, uma festa ao som de músicos streamers que possuem canais na Twitch. A feira conta também com a Arena TwitchCon, que terá transmissão ao vivo e a seguinte agenda:
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>30 de setembro</b> - 19h no horário de Brasília: partidas de Counter-Strike: Global Offensive com imCoty, OMGItsFirefoxx, Summit1g, 2mgovercsquared, missharvey, timthetatman e outros streamers;</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>1 de outubro</b> - 16h no horário de Brasília: final de RuneScape: Battle Mode Tournament de 2016, com dois mil jogadores disputando US$ 10 mil;</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>1 de outubro</b> - 19h15 no horário de Brasília: partidas de Overwatch com Lirik, Ellohime, MissesMae, Fairlight_Excalibur e Haylinic, entre outros streamers;</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>2 de outubro</b> - 15h30 no horário de Brasília: campeonato H1Z1 Invitational, com premiação atual de US$ 191 mil;</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>2 de outubro</b> - 18h15 no horário de Brasília: partidas de Rocket League com Goldglove, lolrenaynay, Gassymexican, FemSteph e FuturemanGaming, entre outros.</p>
        Além disso, há áreas como a Inclusivity City, que contará com organizações que auxiliam a Twitch a se tornar um espaço virtual acolhedor para todos. No local, será realizado um torneio de Super Smash Bros. entre times compostos por mulheres.
        Os participantes com o aplicativo da TwitchCon poderão participar da TwitchQuest, uma experiência interativa que inclui visitar estandes, falar com funcionários e solucionar enigmas para ganhar prêmios e a possibilidade de receber uma viagem para a TwitchCon 2017.
        O evento ainda vai contar com áreas de transmissões, sessão de pintura com Bob Ross, unboxing da Amazon Game Studios, afterparty e mais. Para mais informações, visite o site oficial da <a href="http://www.twitchcon.com/">TwitchCon 2016</a>.
        </p>
    </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
            <blockquote>21 de Setembro de 2016</blockquote>
                <h3>League of Legends: Riot Games homenageia jogador brasileiro em documentário</h3>
            <p align="justify">
                Para aumentar o hype para o campeonato mundial de League of Legends, além dos papéis de parede de cada time participante, a Riot Games também disponibilizou os episódios do documentário Legends Rising, que retrata seis grandes jogadores do MOBA.
                O protagonista do 5º episódio da 2ª temporada é Gabriel “Revolta” Henud, jungler da equipe brasileira INTZ, que venceu a 2ª etapa do CBLoL 2016 e também conquistou a vaga do International Wildcard Qualifier (IWCQ).
            </p>

            <iframe width="854" height="480" src="https://www.youtube.com/embed/UaJJp3mVUpQ" frameborder="0" allowfullscreen></iframe>
        </div>



</div>

</div>
<?php require ("footer.php");
?>
<script src="dist/js/vendor/jquery.min.js"></script>
<script src="dist/js/flat-ui.min.js"></script>
<script src="docs/assets/js/application.js"></script>

<script>
    videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
</script>


    </body>
</html>
