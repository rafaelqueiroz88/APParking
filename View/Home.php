<?php
	$home = new HomeModel();
	if(!isset($_SESSION["login_admin"]))
	{
		header("location:./?page=Index");
	}
	else
	{
		echo $_SESSION["login_admin"];
	}
?>

			<div class="container">
				<div class="row section">
					<div class="col s12 m12">
						<h1> <?php echo $home->VerTituloSite(); ?> </h1>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12">
						<p>
							<h2> nome do cliente </h2>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m12">
						<p>
							<h3> estacionamento hoje </h3>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6">
						<p>
							70% das vagas estão ocupadas no momento
							<div class="progress">							
								<div class="determinate" style="width: 70%"></div>
							</div>
						</p>
					</div>
				</div>
			</div>
