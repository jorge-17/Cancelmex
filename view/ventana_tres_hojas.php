<html>
    <head>
        <title>Ventana Tres Hojas</title>
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../style/estilos.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Cancelmex</a>
                <ul class="nav navbar-nav">
                   <li>
                       <a href="presupuesto.php">Presupuesto</a>
                   </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Cotizaciones <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="mosquiteros.php">Mosquiteros</a>
                            </li>
                            <li>
                                <a href="fijos.php">Fijos</a>
                            </li>
                            <li>
                                <a href="ventana_sencilla.php">Ventana Sencilla</a>
                            </li>
                            <li>
                                <a href="ventana_c_antepecho.php">Ventana con antepecho</a>
                            </li>
                            <li>
                                <a href="ventana_tres_hojas.php">Ventana tres hojas</a>
                            </li>
                            <li>
                                <a href="ventana_cuatro_hojas.php">Ventana cuatro hojas</a>
                            </li>
                            <li>
                                <a href="pta_toda_vidrio.php">Puerta de Vidrio</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="contenido_e" align="center">
            <div class="contenido_i">
               <table class="table">
                    <tr>
                        <td><input type="text" class="form-control" id="alto_V3H" placeholder="Alto"></td>
                        <td><input type="text" class="form-control" id="ancho_V3H" placeholder="Ancho"></td>
                        <td><button onclick="ventana_3_hojas()" class="btn btn-primary">Calcular</button></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <th colspan="2"><center>Linea 2"</center></th>
                                </tr>
                                <tr>
                                    <td>Jamba</td>
                                    <td><div id="jamba_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Jamba sup.</td>
                                    <td><div id="jambas_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Riel</td>
                                    <td><div id="riel_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td>
                                    <td><div id="chapa_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Traslape</td>
                                    <td><div id="traslape_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito pta</td>
                                    <td><div id="zoclitopta_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito c</td>
                                    <td><div id="zoclitoc_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Carretillas</td>
                                    <td><div id="carretillas_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Jal. Embutir</td>
                                    <td><div id="jalembutir_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td><div id="silicon_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vidrio</td>
                                    <td><div id="vidrio_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vinil<div class="anotaciones">(ancho*2)+(alto*6)*7</div></td>
                                    <td><div id="vinil_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Acrilastic</td>
                                    <td><div id="acrilastic_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Suma total</td>
                                    <td><div id="suma_total_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Claro</td>
                                    <td><div id="claro_l2" class="precios">-</div></td>
                                </tr>
                                <tr>
                                    <td>Tintex</td>
                                    <td><div id="tintex_l2" class="precios">-</div></td>
                                </tr>
                                <tr>
                                    <td>Filtrasol</td>
                                    <td><div id="filtrasol_l2" class="precios">-</div></td>
                                </tr>
                                <tr>
                                    <td>Esmerilado</td>
                                    <td><div id="esmerilado_l2" class="precios">-</div></td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <th colspan="2"><center>Linea 3"</center></th>
                                </tr>
                                <tr>
                                    <td>Jamba</td>
                                    <td><div id="jamba_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Jamba sup.</td>
                                    <td><div id="jambas_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Riel</td>
                                    <td><div id="riel_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td>
                                    <td><div id="chapa_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Traslape</td>
                                    <td><div id="traslape_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito pta</td>
                                    <td><div id="zoclitopta_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito c</td>
                                    <td><div id="zoclitoc_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Carretillas</td>
                                    <td><div id="carretillas_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Jal. Embutir</td>
                                    <td><div id="jalembutir_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td><div id="silicon_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vidrio</td>
                                    <td><div id="vidrio_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vinil<div class="anotaciones">(alto*2)+(ancho*6)*7</div></td>
                                    <td><div id="vinil_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Acrilastic</td>
                                    <td><div id="acrilastic_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Suma total</td>
                                    <td><div id="suma_total_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Claro</td>
                                    <td><div id="claro_l3" class="precios">-</div></td>
                                </tr>
                                <tr>
                                    <td>Tintex</td>
                                    <td><div id="tintex_l3" class="precios">-</div></td>
                                </tr>
                                <tr>
                                    <td>Filtrasol</td>
                                    <td><div id="filtrasol_l3" class="precios">-</div></td>
                                </tr>
                                <tr>
                                    <td>Esmerilado</td>
                                    <td><div id="esmerilado_l3" class="precios">-</div></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</html>
