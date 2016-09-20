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
	<link rel="shortcut icon" href="img/íconee-bet.ico">
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


            <div class="menu" id="menujogos">
                <div class="menu">
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">Counter-Strike</a>
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">League of Legends</a>
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">DOTA 2</a>
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">Hearthstone</a>
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">Fighting Games</a>
                </div>
            </div>

			<h2>Campeonatos</h2>
			<p><a class="btn btn-primary btn-large" href="campeonato_form.php?id=">Adicionar Campeonato <span class="glyphicon glyphicon-plus-sign"></span></a></p>
			<table class="table table-condensed">
				<tr class="success">
					<td class="success"></td>
					<td class="success">ID</td>
					<td class="success">Nome</td>
					<td class="success">Sigla</td>
					<td class="success">Região</td>
					<td class="success">Jogo</td>
				</tr>
<?php
require("conexao.php");
$sql = "select idcampeonatos, nome_campeonato, sigla_campeonato, regiao_descricao, jogo_descricao from campeonatos, jogo, regiao
                where campeonatos_idregiao = idregiao and campeonatos_idjogo = idjogo;";
$resultado = mysqli_query($conexao, $sql);
while ($linha = mysqli_fetch_array($resultado)) {
	echo "<tr class='active'>
                <td></td>
                <td class='active'><a class='btn btn-info' href='campeonato_perfil.php?id=".$linha["idcampeonatos"]."'>" .$linha["idcampeonatos"]. "</a>              </td>
                <td class='active'>" . $linha["nome_campeonato"] . "</td>
                <td class='active'>" . $linha["sigla_campeonato"] . "</td>
                <td class='active'>" . $linha["regiao_descricao"] . "</td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
              </tr>";
}
?>
            
            
            
            


    </body>
</html>
