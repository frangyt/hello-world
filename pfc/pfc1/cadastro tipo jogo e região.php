<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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



    <form>

        <div class="row demo-row">

            <div class="col-xs-8" id="cad">
                <div class="form-group">
                    <label for="inputnome"><h4>Nome Completo</h4></label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputemail"><h4>E-mail</h4></label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputemail"><h4>Data de Nascimento</h4></label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                        <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="datanasc" value="<?php echo $datanasc; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputsenha"><h4>Senha</h4></label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="password" class="form-control" id="inputsenha" name="senha" placeholder="Senha" value="<?php echo $senha; ?>">
                    </div>
                </div>
            </div>

            <div class="row demo-row">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8">
                    <div style="overflow:scroll; width:600px; height:200px;">

                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        000000000000000000000vaisefude0000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000

                    </div>
                <h13>
                    <input class="check"  type="checkbox"> aceito</input>
                </h13>
                </div>
                <div class="col-xs-2">
                </div>

            </div>

        <a type="submit" class="btn btn-block btn-lg btn-success" class="aceito" value="Cadastrar">Cadastrar</a>








</div>

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


<script>
    videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
</script>

</body>
</html>
