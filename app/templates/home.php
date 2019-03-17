<!DOCTYPE html>
<html lang="<?php echo APP_LANG ?>">
<head>
	<?php include INC_DIR . 'head.php'; ?>
	<link rel="stylesheet" href="<?php echo CSS_DIR ?>home_styles.css">
</head>
<body>
	<header>

		<?php include INC_DIR . 'home_nav.php'; ?>

		<div class="header-overlay"></div>
		<div class="header-content">		
			<h2>Lorem ipsum dolor.</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quod officiis deleniti suscipit saepe obcaecati dolore fuga, laborum. Qui dolorem nemo nostrum nulla, quas minus beatae eaque incidunt voluptatibus quibusdam.</p>

			<div class="search">
				<form action="">
					<div class="input-wrapper">
						<input type="text" name="s" id="s" placeholder="Busca lo que necesitas">
						<input type="submit" value="Search">
					</div>
				</form>
			</div>
			<p class="image-rights"><a href="https://pixabay.com/photos/guitar-music-acoustic-guitar-1836655/">Free photo by karishea</a></p>
		</div>
	</header>
	<main>
		<section class="section mejor-vendidos">
			<div class="section-content">
				<h2>Lorem ipsum dolor.</h2>
				<hr>

				<div class="objects-wrapper">

					<!-- Object 1 -->
					<div class="object">
						<div class="img"></div>
						<div class="info">
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<div class="desc_meta">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, error, nulla suscipit porro cupiditate quo quasi odio iusto alias dolorem.</p>

								<ul class="meta">
									<li>$: 300</li>
									<li>&: Venezuela</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Object 2 -->
					<div class="object">
						<div class="img"></div>
						<div class="info">
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<div class="desc_meta">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, error, nulla suscipit porro cupiditate quo quasi odio iusto alias dolorem.</p>

								<ul class="meta">
									<li>$: 300</li>
									<li>&: Venezuela</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Object 3 -->
					<div class="object">
						<div class="img"></div>
						<div class="info">
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<div class="desc_meta">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, error, nulla suscipit porro cupiditate quo quasi odio iusto alias dolorem.</p>

								<ul class="meta">
									<li>$: 300</li>
									<li>&: Venezuela</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php // include INC_DIR . 'footer.php' ?>
</body>
</html>