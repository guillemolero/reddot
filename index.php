<?php
/**
 * Created by PhpStorm.
 * User: Portatil
 * Date: 26/06/2017
 * Time: 1:49
 */?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
	<span id="recursos">
		<span>
			<p>Oro</p>
			<input type="text" value="100" readonly class="recursos" id="oro">
		</span>
		<span>
			<p>Plata</p>
			<input type="text" value="200" readonly class="recursos" id="plata">
		</span>
		<span>
			<p>Bronce</p>
			<input type="text" value="300" readonly class="recursos" id="bronce">
		</span>
	</span>
    <span id="botones">
		<button id="1">Boton 1</button>
		<input id="1" type="hidden" value="" readonly class="boton">
		<button id="2">Boton 2</button>
		<input id="2" type="hidden" value="" readonly class="boton">
		<button id="3">Boton 3</button>
		<input id="3" type="hidden" value="" readonly class="boton">
		<button id="4">Boton 4</button>
		<input id="4" type="hidden" value="" readonly class="boton">
		<button id="5">Fabrica de Oro</button>
		<input id="5" type="show" value="Sin fabrica" readonly class="boton">
	</span>
</body>
<script src="assets/js/script.js"></script>
<script src="assets/js/clases.js"></script>
</html>
