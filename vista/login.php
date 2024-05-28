<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
      
		<form action="../controlador/registrarNuevaCuenta.php" method="post">
            <h1>Crear una cuenta</h1>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required />
            <input type="email" name="correo" placeholder="Correo" required />
            <button type="submit" name="submit" value="Entrar" id="entrar">Crear Cuenta</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
	<form action="../controlador/logincontrolador.php" method="post">
            <h1>Iniciar sesión</h1>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required />
            <button type="submit" name="submit" value="Entrar" id="entrar">Acceder</button>
            <?php
            if (isset($_GET['error'])) {
                echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
            }
            ?>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
		<div class="overlay-panel overlay-right">
                <h1>Ya Tienes Cuenta?</h1>
                <p>Si ya tienes cuenta, inicia sesión aquí.</p>
                <button class="ghost" id="signUp">Iniciar sesión</button>
            </div>
            <div class="overlay-panel overlay-left">
                <h1>Aún no tienes Cuenta?</h1>
                <p>Si aún no tienes cuenta, regístrate aquí.</p>
                <button class="ghost" id="signIn">Regístrate</button>
            </div>
           
        </div>
    </div>
</div>
<script src="js/login.js"></script>
</body>
</html>
