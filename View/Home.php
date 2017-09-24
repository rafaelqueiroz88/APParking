<?php
	$home = new HomeModel();
	include "./Model/EstabelecimentoModel.php";
	$database = new Database();
    $db = $database->getConnection();
	$estabelecimentos = new Estabelecimentos($db);
	$estabelecimentos->VerDetalhesEstabelecimento();
	if(!isset($_SESSION["login_admin"]))
	{
		header("location:./?page=Index");
	}
?>

			<div class="container">
				<div class="row">
					<div class="col s12 m12 center">						
						<h2><?php echo $home->VerTituloSite(); ?></h2>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12 center">
						<p>
							<h3>
								<?php
									echo $estabelecimentos->nomeFantasia;
								?>
							</h3>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12">
						<p>
							<h5>estacionamento hoje</h5>
						</p>
						<hr/>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12">
						Você possui um total de:
						<?php
							echo $estabelecimentos->qtdVagas;
							$disponiveis = $estabelecimentos->qtdVagas;
						?>
						vagas.
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12">
						<?php
							echo $estabelecimentos->qtdVagas;
						?>
						de suas vagas estão ocupadas no momento.
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6">
						Você possui: <?php $estabelecimentos->VerVagasDisponiveis($disponiveis); ?> vagas disponíveis até o momento.
						<h5>Disponibilidade de vagas</h5>
						<?php
							$estabelecimentos->MostrarVagasDashBoard($disponiveis);
						?>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12">
						<p>
							<h5>relatório de uso</h5>
						</p>
						<hr/>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6">
						Seu caixa deverá receber: 
						<?php $estabelecimentos->MostrarFinanceiroEntradaDashBoard(); ?>
					</div>
				</div>
			</div>
