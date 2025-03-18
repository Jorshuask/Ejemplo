<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    <h1>Pagina de inicio</h1>
    <h2><a href="/Pagina1">Ir a pagina 1</a></h2>
    <h2><a href="/Pagina2">Ir a pagina 2</a></h2>
    <label>Cual es tu nombre: </label>
    <input type="text" placeholder="Nombre" id="name">
    <button onclick="EnviarName()">Enviar</button>
    <script>
        var name = document.getElementById('name').value;

        function EnviarName() {
            //alert("Hola " + name);
            alert({$datosUsuario['name']});
            
        }
    </script>
</body>
</html>