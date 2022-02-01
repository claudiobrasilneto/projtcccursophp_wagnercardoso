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
	<h1>CONFIRA SUE ORÇAMENTO</h1> <br>

	<!--
    <div class="pesquisa">
		<h6>By Claudio Neto</h6>
	</div> -->

	<div class="conteudo">
		<?php 
		
        $data = $_POST["data"];
        $garantia = $_POST["garantia"];
        $servico = $_POST["servico"];
        $aparelho = $_POST["aparelho"];
        $cliente = $_POST["cliente"];

        echo "<fieldset><h2 style='color:red;'>ORDEM DE SERVIÇO</h2>
        <p><strong>Data da solicitação:</strong>&nbsp $data </p>
        <p><strong>Nome do cliente:</strong>&nbsp $cliente </p>
        <p><strong>Serviço solicitado:</strong>&nbsp $servico </p>
        <p><strong>Modelo do aparelho:</strong>&nbsp $aparelho </p>
        <p><strong>Garantia escolhida:</strong>&nbsp $garantia &nbsp meses </p>
        </fieldset>";
		
        switch ($servico) {
            case 'Formatação':
                echo "<h2 style='color: red;'>Valor total: R$ 70,00</h2>";
                break;
            case 'Troca de peças':
                echo "<h2 style='color: red;'>Valor total: R$ 150,00</h2>";
                break;
            case 'Instalação de softwares':
                echo "<h2 style='color: red;'>Valor total: R$ 50,00 + custo da licença do software</h2>";
                break;
            default:
                echo "Ocorreu um erro. Por favor, retorne à página principal através do botão <strong>Voltar!</strong> abaixo.";
                break;
        }
		?>
        <br><br>
        <p>Assinatura:_______________________________________</p><br>
        <p>Data: ___/___/_____</p><br>
        <p>Ao assinar você concorde com todos os termos de serviço e garantia.</p><br>
        <form>
            <input type="button" value="Imprimir Orçamento" onClick="window.print()">
        </form>

	<br><br>
	<a href="index.html"><button><< Voltar!</button> </a>
		<br>
	</div>

	<div class="rodape">
<!--
	<h2>PÁGINA DE TRATAMENTO DE DADOS <br> WEBSITE SIMPLES COM PHP</h2>
	
	</div> -->
	<footer>
		<h4>2022 © Todos os direitos reservados - Desenvolvido por Claudio Brasil Neto.</h4>
	</footer>




</body>
</html>