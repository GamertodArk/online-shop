<!DOCTYPE html>
<html lang="<?php echo APP_LANG ?>">
<head>
	<?php include INC_DIR . 'head.php' ?>
	<link rel="stylesheet" href="<?php echo CSS_DIR ?>register_styles.css">
</head>
<body>
	<header>
		<?php include INC_DIR . 'home_nav.php' ?>
	</header>

	<main>
		<h2>Register on <?php echo APP_NAME ?></h2>

		<form action="" method="POST">
			<input type="text" name="username" id="username" placeholder="Username">

			<input type="text" name="email" id="email" placeholder="Email">

			<input type="password" name="password" id="password" placeholder="Password">
			
			<input type="password" name="password2" id="password2" placeholder="Repeat Password">

			<input type="submit" value="Register" id="register_btn">
		</form>

		<hr>

		<p>have an account already? <a href="?view=login">login</a></p>
	</main>

	<!-- Footer -->
	<?php include INC_DIR . 'footer.php' ?>
	<script src="<?php echo JS_DIR ?>general.js"></script>
	<script src="<?php echo JS_DIR ?>register_scripts.js"></script>
</body>
</html>