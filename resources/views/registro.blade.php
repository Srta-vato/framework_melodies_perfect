<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Melodies Perfect - Registro</title>
    <style>
        html {
  font-family: 'Montserrat', Arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
  background: url("Imagenes/microphone-g21607d474_1920.jpg");
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, input, select, textarea {
  color: #5A5A5A;
  font: inherit;
  margin: 0;
}

input {
  line-height: normal;
}

textarea {
  overflow: auto;
}

#container {
  border: solid 3px #FFFFFF;
  max-width: 800px;
  margin: 60px auto;
  position: relative;
}

form {
  padding: 37.5px;
  margin: 50px 0;
}

h1 {
  color: #FFFFFF;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
  text-transform: uppercase;
}

.underline {
  border-bottom: solid 2px #FFFFFF;
  margin: -0.512em auto;
  width: 80px;
}

.email {
	float: right;
	width: 45%;
}

input[type='text'], [type='email'], [type="number"], [type="password"]{
	background: none;
  border: none;
	border-bottom: solid 2px #FFFFFF;
	color: #FFFFFF;
	font-size: 1.000em;
    font-weight: 400;
    letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

#form_button {
  background: none;
  border: solid 2px #474544;
  color: #474544;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}
#form_button:hover {
  background: #474544;
  color: #F2F3EB;
}
        </style>
</head>
<body>
    <div id="container">
        <h1>&bull; Melodies Perfect - Gmail &bull;</h1>
        <div class="underline"></div>

        <form action="" method="post" id="contact_form">
            <div class="nombre">
                <label for="nombre"></label>
                <input type="text" placeholder="Mi Primer nombre" name="nombre" id="nombre_input" required>
            </div>

            <div class="apellido">
                <label for="apellido"></label>
                <input type="text" placeholder="Mis Apellidos son" name="Apellido" id="apellido_input" required>
            </div>

            <div class="email">
                <label for="email"></label>
                <input type="email" placeholder="Mi Gmail es" name="email" id="email_input" required>
            </div>

            <select type=text placeholder="ID" name="ID" id="ID_input" required>
                <option disabled hidden selected>Tipo de ID</option>
                <option>Cedula de ciudadania</option>
                <option>Documento de extranjero</option>
                <option>Tarjeta de ID</option>
            </select>

            <div class="NumID">
                <label for="NumID"></label>
                <input type="number" placeholder="Numero de ID" name="NumID" id="NumID_input" required>
            </div>

            <div class="telefono">
                <label for="telefono"></label>
                <input type="number" placeholder="Mi numero celular es:" name="telefono" id="telefono_input" required>
            </div>

            <div class="a">
                <label for="a"></label>
                <input type="password" name="pass" placeholder="Contraseña" id="contraseña_input" required>
            </div>

            <div class="submit">
                <input type="submit" value="Registrarme" id="form_button" />
            </div>
        </form>
    </div>
</body>
</html>