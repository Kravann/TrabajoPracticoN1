<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div>

        </div>
    </header>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Iniciar sesión</label>
				</form>
			</div>

			<div class="login">
            <form action="procesar_formulario.php" method="post">
                <br>
                <button type="button" onclick="agregarNumero(1)">1</button>
                <button type="button" onclick="agregarNumero(2)">2</button>
                <button type="button" onclick="agregarNumero(3)">3</button>
                <button type="button" onclick="agregarNumero(4)">4</button>
                <button type="button" onclick="agregarNumero(5)">5</button>
                <button type="button" onclick="agregarNumero(6)">6</button>
                <button type="button" onclick="agregarNumero(7)">7</button>
                <button type="button" onclick="agregarNumero(8)">8</button>
                <button type="button" onclick="agregarNumero(9)">9</button>
                <br>
                <input type="number" name="usuario" id="usuario" maxlength="8">
                <!-- Agrega los botones del 3 al 9 -->
            </form>
			</div>
	</div>

        <?php
            function agregarNumero($numero) {
                $usuario = $_POST['usuario'];
                $nuevoValor = $usuario. $numero;
                echo $nuevoValor;
            }
            // FUNCION JAVASCRIPT
            // function agregarNumero(numero) {
            //     var usuario = document.getElementById("usuario");
            //     usuario.value += numero;
            // }
        ?>


    </main>

</body>

</html>