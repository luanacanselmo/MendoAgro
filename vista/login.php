<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" />


</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="../controlador/logincontrolador.php">
			<h1>Create Account</h1>
			<input type="text" name="usuario" placeholder="Usuario">
			<input type="text" name="contrasena" placeholder="Contraseña" />
			<button  type="submit" name="submit" value="Entrar" id="entrar">Acceder</button>
			
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="../controlador/logincontrolador.php">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" name="usuario" placeholder="Usuario">
			<input type="text" name="contrasena" placeholder="Contraseña" />
			<button  type="submit" name="submit" value="Entrar" id="entrar">Acceder</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
<script src="js/login.js"></script>

</body>
</html>