<!DOCTYPE html>
<html>
<head>
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

<nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="index.php" >E-bet</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav navbar-left">
                <li ><a href="pagina admin.php">Admin</a></li>
                <li class="dropdown">
                    <a href="jogo.php" class="dropdown-toggle" data-toggle="dropdown">Campeonatos<b class="caret"></b></a>
                    <span class="dropdown-arrow"></span>
                    <ul class="dropdown-menu">
                        <li><a href="jogolista.php">Lista de Jogos</a></li>

                    </ul>
                </li>
                <li><a href="cadastro.php">Cadastrar</a></li>
                <li><a href="calendario.php">Calendário</a></li>
                <li><a href="informacao.php">Notícias</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" id="navbarInput-01" type="search" placeholder="Pesquise aqui!">
                        <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
                    </div>
                </div>
            </form>
        </div>

    </nav>



    </div>

    <footer>
        <div class="container">
            <div class="row demo-row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    © Todos os Direitos reservados á sua mãe
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </footer>
    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
        videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>



    </body>
</html>