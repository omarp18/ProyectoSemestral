<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #000;
            color: white;
            text-align: center;
            padding: 15px;
        }
        
        header h1 {
            margin: 0;
        }
        
        header p {
            margin: 0;
            font-size: 1.2em;
        }
        
        .formulario {
            font-family: Georgia, 'Times New Roman', Times, serif;
            max-width: 400px;
            margin: 40px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .formulario h2 {
            font-size: 1.4em;
            text-align: center;
            color: black;
        }
        
        .formulario label {
            display: block;
            margin-bottom: 6px;
            font-weight: normal;
        }
        
        .formulario input {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        
        .formulario button {
            width: 100%;
            padding: 12px;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.1em;
            cursor: pointer;
        }
        
        .formulario button:hover {
            background-color: gray;
        }
        
        .formulario p {
            color: #333;
            text-align: center;
            font-size: 0.9em;
            margin-top: 15px;
        }

        .formulario a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        .main-button {
        text-align: center; 
        margin: 20px 0; 
        }

        .main-button button {
        background-color: black; 
        color: white; 
        border: none;
        padding: 10px 20px; 
        font-size: 1em; 
        font-family: Arial, sans-serif; 
        cursor: pointer; 
        border-radius: 5px; 
        transition: background-color 0.3s ease; 
        }

        .main-button button:hover {
        background-color: gray; 
        }
        
        footer {
        font-family: 'Times New Roman', Times, serif;
        background-color: #333333;
        color: white;
        text-align: center;
        padding: 10px;
        position: relative;
        margin-top: 20px;
        clear: both;
        }
    </style>
</head>
<body>
    <header>
        <h1>UNDR.CNTRL</h1>
        <p>Moda sostenible y personalizada.</p>
    </header>

    <section class="formulario">
        <h2>Inicia sesión para acceder a tu cuenta</h2>
        <form action="iniciar.php" method="POST">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
        
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
        
            <button type="submit">Iniciar sesión</button>
            <p>¿No tienes cuenta? <a href="Registrate.php">Regístrate aquí</a></p>
        </form>

        <?php if (isset($_GET['error'])): ?>
            <p style="color: red; text-align: center;"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>
                
    </section>

    <footer>
        <p>© 2024 Undr.Cntrl. Todos los derechos reservados.</p>
    </footer>
</body>
</html>