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
        <td></td>
		<td>PRECIO</td>
	</tr>
	<tr>
		<td><input type="text" name="alto_moquitero" id="alto_m"></td>
		<td><input type="text" name="ancho_mosquitero" id="ancho_m"></td>
		<td><input type="text" name="valor_x" id="valor_x" value="150" placeholder="150"></td>
        <td><button onclick="cambio_tela()">Calcular</button></td>
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
		<td>clasico</td>
        <td>color</td>
        <td></td>
		<td>Precio clasico</td>
		<td>Precio color</td>
	</tr>
	<tr>
		<td><input type="text" name="alto_m" id="alto_MF"></td>
		<td><input type="text" name="ancho_m" id="ancho_MF"></td>
		<td><input type="text" name="X1" id="valor_1" value="300" placeholder="300"></td>
        <td><input type="text" name="X2" id="valor_2" value="350" placeholder="350"></td>
        <td><button onclick="M_fijo()">Calcular</button></td>
		<td><div class="precios" id="pre_clasico" onmouseover="M_fijo()">-</div></td>
		<td><div class="precios" id="pre_color" onmouseover="M_fijo()">-</div></td>
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
        <td colspan="2"><button onclick="M_corredizo()">Calcular</button></td>
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
        <td><div id="costo_vertical_basico">-</div></td>
        <td><div id="costo_horizontal_basico">-</div></td>
        <td><div id="costo_adaptador_basico">-</div></td>
        <td><div id="costo_angulo_basico">-</div></td>
        <td><div id="costo_jal_basico">-</div></td>
        <td><div id="costo_carret_basico">-</div></td>
        <td><div id="costo_vinil_basico">-</div></td>
        <td><div id="costo_tela_basico">-</div></td>
        <td><div id="costo_tornillo_basico">-</div></td>
        <td><div id="costo_silicon_basico">-</div></td>
        <td><div id="suma_total_basico">-</div></td>
        <td><div id="costo_total_basico">-</div></td>
    </tr>
    <tr>
        <td><div id="costo_vertical_color">-</div></td>
        <td><div id="costo_horizontal_color">-</div></td>
        <td><div id="costo_adaptador_color">-</div></td>
        <td><div id="costo_angulo_color">-</div></td>
        <td><div id="costo_jal_color">-</div></td>
        <td><div id="costo_carret_color">-</div></td>
        <td><div id="costo_vinil_color">-</div></td>
        <td><div id="costo_tela_color">-</div></td>
        <td><div id="costo_tornillo_color">-</div></td>
        <td><div id="costo_silicon_color">-</div></td>
        <td><div id="suma_total_color">-</div></td>
        <td><div id="costo_total_color">-</div></td>
    </tr>
</table>
</body>
<script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
</html>
