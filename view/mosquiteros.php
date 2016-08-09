<!DOCTYPE html>
<html>
<head>
	<title>Cotizacion Mosquiteros</title>
	<link rel="stylesheet" type="text/css" href="../style/estilos.css">
	<link  rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Cancelmex</a>
                <ul class="nav navbar-nav">
                   <li>
                       <a href="presupuesto.php">Presupuesto</a>
                   </li>
                   <li>
                        <a href="mosquiteros.php">Mosquiteros</a>
                    </li>
                    <li>
                        <a href="fijos.php">Fijos</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Ventanas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                               <a href="ventana_sencilla.php">Ventana corrediza 1 1/2"</a>
                            </li>
                            <li>
                                <a href="ventana_sencilla_1.php">Ventana corrediza 2" y 3"</a>
                            </li>
                            <li>
                                <a href="ventana_tres_hojas.php">Ventana tres hojas 2" y 3"</a>
                            </li>
                            <li>
                                <a href="ventana_cuatro_hojas.php">Ventana cuatro hojas 2" y 3"</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Ventanas con antepecho <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="ventana_c_antepecho.php">Ventana con antepecho</a>
                            </li>
                            <li>
                                <a href="ventana_c_ante_tres_hojas.php">Ventana tres hojas</a>
                            </li>
                            <li>
                                <a href="ventana_c_ante_cuatro_hojas.php">Ventana cuatro hojas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Ventanas proyectables s/35 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="vetana_proyectable_sencilla.php">Ventana una hoja</a>
                            </li>
                            <li>
                                <a href="vetana_proyectable_2.php">Ventana dos hojas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Puertas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="puerta_dos_pulgadas.php">Puerta de 2"</a>
                            </li>
                            <li>
                                <a href="pta_toda_vidrio.php">Puerta de 3"</a>
                            </li>
                            <li>
                                <a href="puerta_tres_cuartos.php">Puerta de 1 3/4"</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="ingresar_materiales.php">Registrar materiales</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="contenido_e" align="center">
        <div class="contenido_i">
            <table class="table" class="contenido">
	            <tr>
		            <td colspan="5"><center>Cambio de tela</center></td>
	            </tr>
	            <tr>
		            <td>Alto</td>
		            <td>Ancho</td>
		            <td>X</td>
                    <td></td>
		            <td>PRECIO</td>
	            </tr>
	            <tr>
		            <td><input class="form-control" type="text" name="alto_moquitero" id="alto_m"></td>
		            <td><input class="form-control" type="text" name="ancho_mosquitero" id="ancho_m"></td>
		            <td><input  class="form-control" type="text" name="valor_x" id="valor_x" value="150" placeholder="150"></td>
                    <td><button onclick="cambio_tela()" class="btn btn-primary">Calcular</button></td>
		            <td><div class="precios" id="precio_mosquitero" onmouseover="cambio_tela()">-</div></td>
	            </tr>
            </table>
            <br>
            <br>
            <br>
            <table class="table">
	            <tr>
		            <td colspan="7"><center>Mosquitero Fijo</center></td>
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
		            <td><input type="text" class="form-control" name="alto_m" id="alto_MF"></td>
		            <td><input type="text" class="form-control" name="ancho_m" id="ancho_MF"></td>
		            <td><input type="text" class="form-control" name="X1" id="valor_1" value="300" placeholder="300"></td>
                    <td><input type="text" class="form-control" name="X2" id="valor_2" value="350" placeholder="350"></td>
                    <td><button onclick="M_fijo()" class="btn btn-primary">Calcular</button></td>
		            <td><div class="precios" id="pre_clasico" onmouseover="M_fijo()">-</div></td>
		            <td><div class="precios" id="pre_color" onmouseover="M_fijo()">-</div></td>
	            </tr>
            </table>
<br>
<br>
<br>
            <table class="table">
	            <tr>
            		<td colspan="12"><center>Mosquitero corredizo</center></td>
	            </tr>
	            <tr>
		            <td colspan="2"><input class="form-control" placeholder="Alto" type="text" name="alto_MC" id="alto_MC"></td>
		            <td colspan="2"><input class="form-control" placeholder="Ancho" type="text" name="ancho_MC" id="ancho_MC"></td>
                    <td colspan="2"><button onclick="M_corredizo()" class="btn btn-primary">Calcular</button></td>
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
                    <td><div class="precios" id="costo_total_basico">-</div></td>
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
                    <td><div class="precios" id="costo_total_color">-</div></td>
                </tr>
            </table>
        </div>
        </div>
</body>
<script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
<script type="text/javascript" src="../behavior/jquery.min.js"></script>
<script type="text/javascript" src="../style/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</html>
