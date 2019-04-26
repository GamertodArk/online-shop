<!DOCTYPE html>
<html lang="<?php echo APP_LANG ?>">
<head>
	<?php include INC_DIR . 'head.php' ?>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_DIR ?>login_styles.css">
</head>
<body>
	<header>
		<?php include INC_DIR . 'home_nav.php' ?>
	</header>

	<main>
		<h2>Login on <?php echo APP_NAME ?></h2>

		<form action="" method="POST">
			<input type="text" name="username" id="username" placeholder="Email">

			<input type="password" name="password" id="password" placeholder="Password">

			<input type="submit" value="Log in">
		</form>

		<hr>

		<p>Don't have an account? <a href="?view=register">Register</a></p>

	</main>

	<!-- Footer -->
	<?php include INC_DIR . 'footer.php' ?>
	<script src="<?php echo JS_DIR ?>general.js"></script>
</body>
</html>