<html>
    <head>
        <title>Ventana fija</title>
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
                        <th><input type="text" id="alto_VS" placeholder="Alto" class="form-control"></th>
                        <th><input type="text" id="ancho_VS" placeholder="Ancho" class="form-control"></th>
                        <th><button onclick="ventana_fija()" class="btn btn-primary">Calcular</button></th>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <th colspan="2"><center>Linea 1 1/2"</center></th>
                                </tr>
                                <tr>
                                    <td>Jamba</td>
                                    <td><div id="jamba_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Jamba Sup.</td>
                                    <td><div id="jambas_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Riel</td>
                                    <td><div id="riel_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa<div class="anotaciones">(precio)*</div></td>
                                    <td><div id="cchapa_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Traslape</td>
                                    <td><div id="ctraslape_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclo pta<div class="anotaciones">(precio)*</div></td>
                                    <td><div id="zoclopt_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito c<div class="anotaciones">(se mul * 4)*</div></td>
                                    <td><div id="zoclitoc_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Carretillas</td>
                                    <td><div id="carretillas_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Jal. Embutir</td>
                                    <td><div id="jalembutir_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <td><div id="silicon_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Acrilastic</td>
                                    <td><div id="acrilastica_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vidrio</td>
                                    <td><div id="vidrio_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vinil</td>
                                    <td><div id="vinil_l1-">-</div></td>
                                </tr>
                                <tr>
                                    <td>Suma total</td>
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
                        <td>
                        </td>
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
                                    <td>Jamba Sup.</td>
                                    <td><div id="jambas_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Riel</td>
                                    <td><div id="riel_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td>
                                    <td><div id="cchapa_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Traslape</td>
                                    <td><div id="ctraslape_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclo pta</td>
                                    <td><div id="zoclopt_l2">-</div></td>
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
                                    <td>Acrilastic</td>
                                    <td><div id="acrilastica_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vidrio</td>
                                    <td><div id="vidrio_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vinil</td>
                                    <td><div id="vinil_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Suma total</td>
                                    <td><div id="suma_total_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Claro</td>
                                    <td><div class="precios" id="claro_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Tintex</td>
                                    <td><div class="precios" id="tintex_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Filtrasol</td>
                                    <td><div class="precios" id="filtrasol_l2">-</div></td>
                                </tr>
                                <tr>
                                    <td>Esmerilado</td>
                                    <td><div class="precios" id="esmerilado_l2">-</div></td>
                                </tr>
                            </table>
                        </td>
                        <td>
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
                                    <td>Jamba Sup.</td>
                                    <td><div id="jambas_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Riel</td>
                                    <td><div id="riel_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td>
                                    <td><div id="cchapa_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>C. Traslape</td>
                                    <td><div id="ctraslape_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Zoclo pta<div class="anotaciones">(precio mas bajo que 2")*</div></td>
                                    <td><div id="zoclopt_l3">-</div></td>
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
                                    <td>Acrilastic</td>
                                    <td><div id="acrilastica_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vidrio<div class="anotaciones">(precio = a 2")*</div></td>
                                    <td><div id="vidrio_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Vinil</td>
                                    <td><div id="vinil_l3">-</div></td>
                                </tr>
                                <tr>
                                    <td>Suma total</td>
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
                    </tr>
                </table>
           </div>
        </div>
    </body>
    <script src="../behavior/comportamiento_js.js" type="text/javascript"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/materialize/js/materialize.min.js"></script>
</html>
