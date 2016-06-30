<html>
    <head>
        <title>Puerta de Vidrio</title>
        <link rel="stylesheet" type="text/css" href="../style/estilos.css">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
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
                        <td><input class="form-control" id="ancho_pta_v" placeholder="Ancho"></td>
                        <td><input class="form-control" id="alto_pta_v" placeholder="Alto"></td>
                        <td><button onclick="" class="btn btn-primary">Calcular</button></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <th colspan="2" class="encabezados_tablas"><center>Linea 3"</center></th>
                                </tr>
                                <tr>
                                    <td>Canal Liso lateral</td>
                                    <td><div id="canall_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Canal Liso Superior</td>
                                    <td><div id="canals_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Batiente 3/4</td>
                                    <td><div id="batiente_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td>
                                    <td><div id="chapa_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Cabezal</td>
                                    <td><div id="cabezal_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclo pta</td>
                                    <td><div id="zocolopta_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vidrio</td>
                                    <td><div id="vidrio_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Pivote descentrado</td>
                                    <td><div class="pivoted_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Chapa doble manija</td>
                                    <td><div id="chapadm_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Acrilastic</td>
                                    <td><div id="acrilastica_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Tornillos</td>
                                    <td><div id="tornillos_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vinil</td>
                                    <td><div id="vinil_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Junquillo</td>
                                    <td><div id="junquillo_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Suma Total</td>
                                    <td><div id="suma_total_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Claro</td>
                                    <td><div class="precios" id="claro_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Tintex</td>
                                    <td><div class="precios" id="tintex_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Filtrasol</td>
                                    <td><div class="precios" id="filtrasol_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Esmerilado</td>
                                    <td><div class="precios" id="esmerilado_l3">-</div></td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <th colspan="2" class="encabezados_tablas"><center>Linea 1 3/4"</center></th>
                                </tr>
                                <tr>
                                    <td>Canal Liso lateral</td>
                                    <td><div id="canall_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Canal Liso Superior</td>
                                    <td><div id="canals_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Batiente 3/4</td>
                                    <td><div id="batiente_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td>
                                    <td><div id="chapa_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Cabezal</td>
                                    <td><div id="cabezal_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclo pta</td>
                                    <td><div id="zocolopta_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vidrio</td>
                                    <td><div id="vidrio_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Pivote descentrado</td>
                                    <td><div class="pivoted_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Chapa doble manija</td>
                                    <td><div id="chapadm_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Acrilastic</td>
                                    <td><div id="acrilastica_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Tornillos</td>
                                    <td><div id="tornillos_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vinil</td>
                                    <td><div id="vinil_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Junquillo</td>
                                    <td><div id="junquillo_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Suma Total</td>
                                    <td><div id="suma_total_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Claro</td>
                                    <td><div class="precios" id="claro_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Tintex</td>
                                    <td><div class="precios" id="tintex_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Filtrasol</td>
                                    <td><div class="precios" id="filtrasol_l1">-</div></td>
                                </tr>
                                <tr>
                                    <td>Esmerilado</td>
                                    <td><div class="precios" id="esmerilado_l1">-</div></td>
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
