<!DOCTYPE html>
<html>
<head>
	<title>Cotizcion Mosquiteros</title>
	<link rel="stylesheet" type="text/css" href="../style/estilos.css">
</head>
<body>
<table>
	<tr>
		<td colspan="4"><center>Cambio de tela</center></td>
	</tr>
	<tr>
		<td>Alto</td>
		<td>Ancho</td>
		<td>X</td>
		<td>PRECIO</td>
	</tr>
	<tr>
		<td><input type="text" name="alto_moquitero" id="alto_m"></td>
		<td><input type="text" name="ancho_mosquitero" id="ancho_m"></td>
		<td><input type="text" name="valor_x" id="valor_x" value="150" placeholder="150"></td>
		<td><div class="precios" id="precio_mosquitero" onmouseover="cambio_tela()">-</div></td>
	</tr>
</table>
<br>
<br>
<br>
<table>
	<tr>
		<td colspan="6"><center>Mosquitero Fijo</center></td>
	</tr>
	<tr>
		<td>Alto</td>
		<td>Ancho</td>
		<td>X1</td>
		<td>Clasico</td>
		<td>X2</td>
		<td>Color</td>
	</tr>
	<tr>
		<td><input type="text" name="alto_m" id="alto_MF"></td>
		<td><input type="text" name="ancho_m" id="ancho_MF"></td>
		<td><input type="text" name="X1" id="valor_1" value="300" placeholder="300"></td>
		<td><div class="precios" id="pre_clasico" onmouseover="MF_clasico()">-</div></td>
		<td><input type="text" name="X2" id="valor_2" value="350" placeholder="350"></td>
		<td><div class="precios" id="pre_color" onmouseover="MF_color()">-</div></td>
	</tr>
</table>
<br>
<br>
<br>
<table>
	<tr>
		<td colspan="12"><center>Mosquitero corredizo</center></td>
	</tr>
	<tr>
		<td colspan="2">Alto: <input type="text" name="alto_MC" id="alto_MC"></td>
		<td colspan="2">Ancho: <input type="text" name="ancho_MC" id="ancho_MC"></td>
	</tr>
	<tr>
		<th>Vertical</th>
		<th>Horizontal</th>
		<th>Adaptador</th>
		<th>Angulo</th>
		<th>Jal. planas</th>
		<th>Carret. Mosq</th>
		<th>Vinil</th>
		<th>Tela</th>
		<th>Tornillos</th>
		<th>Silicon</th>
		<th>ITEM 1</th>
		<th>ITEM 1</th>
	</tr>
    <tr>
        <td><div id="costo_vertical">-</div></td>
        <td><div id="costo_horizontal">-</div></td>
        <td><div id="costo_adaptador">-</div></td>
        <td><div id="costo_angulo">-</div></td>
        <td><div id="costo_jal">-</div></td>
        <td><div id="costo_carret">-</div></td>
        <td><div id="costo_vinil">-</div></td>
        <td><div id="costo_tela">-</div></td>
        <td><div id="costo_tornillo">-</div></td>
        <td><div id="costo_silicon">-</div></td>
    </tr>
</table>
</body>
<script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
</html>
