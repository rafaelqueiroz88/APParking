<?php
	$database = new Database();
	$db = $database->getConnection();
	$home = new HomeModel($db);
?>

		</main>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<p>
							<h2> GreS Software </h2>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<time>
							<h3> <?php $home->VerData(); ?> </h3>
						</time>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4">
						<p>
							&copy; - Todos os direitos reservados
						</p>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="./Public/js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="./Public/js/jquery.mask.js"></script>
		<script type="text/javascript" src="./Public/js/bootstrap.js"></script>
		<script type="text/javascript" src="./Public/js/bootbox.min.js"></script>
		<script type="text/javascript" src="./Public/js/fieldmask.js"></script>
		<script type="text/javascript" src="./Public/js/admin_init.js"></script>
	</body>
</html>