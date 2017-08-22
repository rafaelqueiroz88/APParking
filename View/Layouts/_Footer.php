<?php
	$home = new HomeModel();
?>

		</main>
		<footer class="page-footer black">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text"> <?php $home->VerTituloSite(); ?> </h5>
						<p class="grey-text text-lighten-4"> <?php $home->VerSlogan(); ?>.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<time>
						<?php $home->VerData(); ?>
					</time>
					© Todos os direitos reservados
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="./Public/js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="./Public/js/jquery.mask.js"></script>
		<script type="text/javascript" src="./Public/js/materialize.js"></script>
		<script type="text/javascript" src="./Public/js/init.js"></script>
	</body>
</html>