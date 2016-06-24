<html>
    <head>
        <title>Cotizacion Fijos</title>
        <link rel="stylesheet" type="text/css" href="../style/estilos.css">
        <link rel="stylesheet" type="text/css" href="../style/materialize/css/materialize.min.css">
    </head>
    <body>
       <ul class="dropdown-content" id="dropdown1">
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
                        </ul>
        <nav class="nav">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">Cancelmex</a>
                <ul class="right hide-on-med-and-down">
                   <li>
                       <a href="presupuesto.php">Presupuesto</a>
                   </li>
                    <li class="dropdown">
                        <a class="dropdown-button" data-activates="dropdown1">Cotizaciones <i class="material-icons right">arrow_drop_down</i></span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="contenido_e" align="center">
        <div class="contenido_i">
        <table class="table">
            <tr>
                <th><input class="form-control" type="text" id="ancho_F" placeholder="Ancho"></th>
                <th><input class="form-control" type="text" id="alto_F" placeholder="Alto"></th>
                <th><button onclick="fijos()" class="btn btn-primary">Calcular</button></th>
            </tr>
        </table>
        <table class="table">
            <tr>
                <th>Lineas</th>
                <th>Bolsa superior</th>
                <th>Bolsa lateral</th>
                <th>Junquillo</th>
                <th>Escalonado</th>
                <th>Vinil</th>
                <th>Silicon</th>
                <th>Acrilastic</th>
                <th>Vidrio</th>
                <th>ITEM 1</th>
                <th>ITEM 2</th>
                <th>Claro</th>
                <th>Tintex</th>
                <th>Filtrasol</th>
            </tr>
            <tr>
                <th>Linea 2"</th>
                <td><div id="bs_2">-</div></td>
                <td><div id="bl_2">-</div></td>
                <td><div id="jun_2">-</div></td>
                <td><div id="esc_2">-</div></td>
                <td><div id="vin_2">-</div></td>
                <td><div id="sil_2">-</div></td>
                <td><div id="acri_2">-</div></td>
                <td><div id="vid_2">-</div></td>
                <td><div id="suma_total_2">-</div></td>
                <td><div id="costo_total_2">-</div></td>
                <td><div class="precios" id="p_claro_2">-</div></td>
                <td><div class="precios" id="p_tintex_2">-</div></td>
                <td><div class="precios" id="p_filtrasol_2">-</div></td>
            </tr>
            <tr>
                <th>Linea 3"</th>
                <td><div id="bs_3">-</div></td>
                <td><div id="bl_3">-</div></td>
                <td><div id="jun_3">-</div></td>
                <td><div id="esc_3">-</div></td>
                <td><div id="vin_3">-</div></td>
                <td><div id="sil_3">-</div></td>
                <td><div id="acri_3">-</div></td>
                <td><div id="vid_3">-</div></td>
                <td><div id="suma_total_3">-</div></td>
                <td><div id="costo_total_3">-</div></td>
                <td><div class="precios" id="p_claro_3">-</div></td>
                <td><div class="precios" id="p_tintex_3">-</div></td>
                <td><div class="precios" id="p_filtrasol_3">-</div></td>
            </tr>
        </table>
        </div>
        </div>
    </body>
    <script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/materialize/js/materialize.min.js"></script>
</html>
