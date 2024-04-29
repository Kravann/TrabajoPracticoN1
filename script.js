// se encarga de capturar los clicks en los botones y actualizar el display con el password ingresado. Si el password es incorrecto, se muestra un mensaje de error y se borra el password ingresado.

const display = document.getElementById("display");
const borrar = document.getElementById("borrar");
const acceder = document.getElementById("acceder");
const botones = document.querySelectorAll("#botones button");

let password = "";

botones.forEach((boton) => {
    boton.addEventListener("click", () => {
        password += boton.value;
        display.textContent = password;
    });
});

borrar.addEventListener("click", () => {
    password = password.slice(0, -1);
    display.textContent = password;
});

acceder.addEventListener("click", () => {
    const formData = new FormData();
    formData.append("password", password);

    fetch("password.php", {
        method: "POST",
        body: formData
    })
    .then((response) => response.text())
    .then((data) => {
        if (data == "Password incorrecto. Inténtalo de nuevo.") {
            alert(data);
            password = "";
            display.textContent = password;
        }
    });
});