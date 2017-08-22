<?php
	$database = new Database();
    $db = $database->getConnection();
    include "./Model/EstabelecimentoModel.php";
	$estabelecimentos = new Estabelecimentos($db);
	$home = new HomeModel($db);
?>
			
			<div class="container">
				<div class="row section">
					<div class="col-sm-12 col-md-12">
						<h2 align="center"><?php $home->VerTituloSite(); ?></h2>
					</div>
				</div>
				<div class="row section">
					<div class="col-sm-12 col-md-12">
						<h3>estabelecimentos</h3>
					</div>
				</div>
				<div class="row section">
					<div class="col-sm-12 col-md-offset-2 col-md-8">
						<table class="table table-striped table-hover" align="center">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Quantidade de Vagas</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$estabelecimentos->ListarEstabelecimentos();
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
