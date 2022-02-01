<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" id="topo" alt="Topo">
	</div>
	<br><br><br><br>
	<h1>RESULTADO AVALIAÇÃO DE CRÉDITO</h1> <br>
<!--
	<div class="pesquisa">
		<h6>By Claudio Neto</h6>
	</div> -->

	<div class="conteudo">
		<?php 
		
		$nome = $_POST["nome"];
        $renda = $_POST["renda"];
		
        echo "Olá $nome muito obrigado pelo seu contato!";
        if ($renda>=2000) {
            echo "Parabéns seu Crédito está <strong>pré-aprovado.</strong><br><br>";
        }elseif ($renda<2000) {
            echo "Infelizmente neste momento <strong>não poderemos conceder Crédito</strong> para seu perfil, clique em 'voltar' parar retornar à página inicial";
        }
		?>
	<br><br>
	<a href="index.html"><button class="btnback"><< Voltar!</button> </a>
		<br>
	</div>

	<div class="rodape">
	<h2>WEBSITE SIMPLES COM PHP</h2>
	<h2>PÁGINA DE TRATAMENTO DE DADOS</h2>
	</div>
	<footer>
		<h4>2022 © Todos os direitos reservados - Desenvolvido por Claudio Brasil Neto.</h4>
	</footer>




</body>
</html>