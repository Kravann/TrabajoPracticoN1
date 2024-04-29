<?php
// comprueba si el password ingresado es correcto y, si lo es, redirige al usuario a otra pantalla
$password = "12345678";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password_ingresado = $_POST["password"];

    if ($password_ingresado == $password) {
        echo ("HOLA");
        // header("Location: otra_pantalla.php");
    } else {
        echo "Password incorrecto. Inténtalo de nuevo.";
    }
}
?>