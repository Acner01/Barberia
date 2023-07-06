<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Registrarse</title>
    <script>
        function mostrarCampoConfirmacion() {
            // Obtén el valor del campo de entrada
            var valor = document.getElementById("campo").value;

            // Verifica si el campo está vacío
            if (valor === "") {
                alert("Por favor, introduce un valor antes de continuar.");
            } else {
                // Oculta el campo de entrada y muestra el campo de confirmación
                document.getElementById("campo").style.display = "none";
                document.getElementById("confirmacion").style.display = "block";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Registrate</h1>
        <form>
        <label for="campo">Campo de entrada:</label>
        <input type="text" id="campo" name="campo">
        <br>
        <div id="confirmacion" style="display: none;">
            <label for="confirmacion">Confirmación:</label>
            <input type="text" id="confirmacion" name="confirmacion">
        </div>
        <br>
        <button type="button" onclick="mostrarCampoConfirmacion()">Continuar</button>
    </form>
  </div>
</body>
</html>