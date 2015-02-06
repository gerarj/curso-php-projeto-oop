<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Curso PHP - PROJETO OOP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="container">
        <div id="loading" style="text-align:center;">Carregando ...</div>
		<div id="page" style="display:none;">
<?php

require_once('config/error_debug.php');
require_once('libs/ClientePF.php');
require_once('libs/ClientePJ.php');
require_once('libs/ClienteCollection.php');


$Collection = new ClienteCollection();

$Collection->add(new ClientePF(1,'Cliente Teste 1','12312412412','Av. Presidente Vargas, 77, Centro, RJ',5));
$Collection->add(new ClientePF(2,'Cliente Teste 2','12354848115','Av. Presidente Vargas, 78, Centro, RJ',6));
$Collection->add( (new ClientePJ(3,'Cliente Teste 3','123457-0001/77','Av. Presidente Vargas, 79, Centro, RJ',10))->setEnderecoCobranca('Av. Washington Luiz, 177, Centro') );
$Collection->add(new ClientePJ(4,'Cliente Teste 4','123457-0001/12','Av. Presidente Vargas, 80, Centro, RJ',10));
$Collection->add(new ClientePF(5,'Cliente Teste 5','12354687988','Av. Presidente Vargas, 81, Centro, RJ',5));
$Collection->add(new ClientePJ(6,'Cliente Teste 6','123457-0001/17','Av. Presidente Vargas, 82, Centro, RJ',8));
$Collection->add(new ClientePJ(7,'Cliente Teste 7','123457-0001/77','Av. Presidente Vargas, 83, Centro, RJ',9));
$Collection->add(new ClientePF(8,'Cliente Teste 8','12314516871','Av. Presidente Vargas, 84, Centro, RJ',10));
$Collection->add(new ClientePF(9,'Cliente Teste 9','12315461545','Av. Presidente Vargas, 85, Centro, RJ',6));
$Collection->add(new ClientePF(10,'Cliente Teste 10','1231544513','Av. Presidente Vargas, 86, Centro, RJ',2));


//set Order
$order = (isset($_GET['order']))? $_GET['order'] : 'ASC'; 

?>			
	<h2>Clientes da XYZ</h2>

	<div class="panel panel-default">
		<div class="panel-heading">Listagem de Clientes | Total de Clientes: (<?php echo $Collection->getTotal(); ?>) <span class="pull-right">Ordem: <a href="?order=ASC" class="btn btn-primary btn-xs">Crescente</a> <a href="?order=DESC" class="btn btn-primary btn-xs">Decrescente</a></span></div>
		<div class="panel-body" style="padding:0;">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Classificação</th>
						<th>Tipo</th>
						<th>Nome</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($Collection->sortBy($order)->getClientes() as $cliente): ?>
					<tr>
						<td><?php echo $cliente->getId(); ?></td>
						<td><?php echo implode('',array_fill(0, $cliente->getClassificacao(), '<i class="glyphicon glyphicon-star"></i>')); ?></td>
						<td><?php echo $cliente->getType(); ?></td>						
						<td><?php echo $cliente->getNome(); ?></td>
						<td> <button onclick="show(<?php echo $cliente->getId(); ?>); return false;" class="btn btn-primary">Detalhes</button></td>
					</tr>
					<tr class="well" id="detail_<?php echo $cliente->getId(); ?>" style="display:none;">
						<td><b><?php echo $cliente->getDocumentType(); ?>:</b> <?php echo $cliente->getDocument(); ?></td>
						<td colspan="2"><b>Endereço:</b> <?php echo $cliente->getEndereco(); ?></td>
						<td colspan="2"><b>Endereço de Cobrança:</b> <?php echo $cliente->getEnderecoCobranca(); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="panel-footer"></div>
	</div>

		</div>
</div>		
        <!-- Add your site or application content here -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/{{JQUERY_VERSION}}/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="bower_components/jquery/dist/jquery.js"><\/script>')</script>
        <script src="bower_components/boostrap/dist/js/bootstrap.js"></script>
		<script src="assets/js/ui.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
