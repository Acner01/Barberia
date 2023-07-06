<!DOCTYPE html>
<html lang="en">s
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
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
    <div class="Tit">
        <h1>Registrate</h1>
    </div>
    <div class="container">
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  </div>
</body>
</html>