<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de Productos</title>
    <style>
  
  body {
    font-family: Arial, sans-serif;
    background: url(Imagenes/asistente.jpg);
    background-size: 200vw 200vh;
    background-repeat: no-repeat;
    margin-top: 200px;
    margin-left: 300px;
    margin-right: 300px;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    text-align: center;
    margin-bottom: 20px;
}

#resultados {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.producto {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    width: 200px;
    text-align: center;
}

.boton-comprar {
    display: block;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px;
    text-decoration: none;
    cursor: pointer;
}
body {
    font-family: Arial, sans-serif;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    text-align: center;
    margin-bottom: 20px;
}

#resultados {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.producto {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    width: 200px;
    text-align: center;
}

.boton-comprar {
    display: block;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px;
    text-decoration: none;
    cursor: pointer;
}

    </style>

</head>
<body>
    <h1>Bienvenido al Buscador de Productos</h1>
    
    <form action="buscador.php" method="GET">
        <label for="busqueda">Buscar Productos:</label>
        <input type="text" name="busqueda" id="busqueda" placeholder="Ingrese el nombre del producto">
        <button type="submit">Buscar</button>
    </form>

    <div id="resultados">
        <!-- Aquí se mostrarán los resultados de la búsqueda -->
    </div>

    <script>
        // La función comprarProducto redirige a comprar.php con el ID del producto
        function comprarProducto(id) {
            window.location.href = "comprar.php?id=" + id;
        }
    </script>
</body>
</html>