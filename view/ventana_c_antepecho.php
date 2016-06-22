<html>
    <head>
        <title>Ventana con antepecho</title>
        <link rel="stylesheet" type="text/css" href="../style/estilos.css">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a class="navbar-brand">Cancelmex</a>
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
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="contenido_e" align="center">
           <div class="contenido_i">
               <table class="table">
                   <tr>
                       <td><input type="text" id="ancho_VcA" placeholder="Ancho" class="form-control"></td>
                       <td><input type="text" id="alto_VcA" placeholder="Alto" class="form-control"></td>
                       <td><input type="text" id="fijo_VcA" placeholder="Fijo" class="form-control"></td>
                       <td><button onclick="ventana_antepecho()" class="btn btn-primary">Calcular</button></td>
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
                                   <td><div id="cchapa_l2">-</div></td>
                               </tr>
                               <tr>
                                   <td>C. Traslape</td>
                                   <td><div id="ctraslape_l2">-</div></td>
                               </tr>
                               <tr>
                                   <td>Zoclito c<div class="anotaciones">(se mul * 4)*</div></td>
                                   <td><div id="zoclito_l2">-</div></td>
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
                                   <td><div id="acrilastic_l2">-</div></td>
                               </tr>
                               <tr>
                                   <td>Escalonado</td>
                                   <td><div id="escalonado_l2">-</div></td>
                               </tr>
                               <tr>
                                   <td>Tapa bolsa</td>
                                   <td><div id="tapabolsa_l2">-</div></td>
                               </tr>
                               <tr>
                                   <td>Vidrio</td>
                                   <td><div id="vidrio_l2">-</div></td>
                               </tr>
                               <tr>
                                   <td>Vidrio</td>
                                   <td><div id="vidrio2_l2"></div></td>
                               </tr>
                               <tr>
                                   <td>Vinil</td>
                                   <td><div id="vinil_l2">-</div></td>
                               </tr>
                               <tr>
                                   <td>Bolsa</td>
                                   <td><div id="bolsa_l2">-</div></td>
                               </tr>
                               <tr>
                                   <td>Junquillo</td>
                                   <td><div id="junquillo_l2">-</div></td>
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
                                   <td>Filtrasol<div class="anotaciones">(mul = que tintex)*</div></td>
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
                                   <td><div id="cchapa_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>C. Traslape</td>
                                   <td><div id="ctraslape_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>Zoclito c</td>
                                   <td><div id="zoclito_l3">-</div></td>
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
                                   <td>Silicon<div class="anotaciones">(costo menor que 2")*</div></td>
                                   <td><div id="silicon_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>Acrilastic<div class="anotaciones">(costo menor que 2")*</div></td>
                                   <td><div id="acrilastic_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>Escalonado</td>
                                   <td><div id="escalonado_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>Tapa bolsa<div class="anotaciones">(sin precio)*</div></td>
                                   <td><div id="tapabolsa_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>Vidrio<div class="anotaciones">(sin precio)*</div></td>
                                   <td><div id="vidrio_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>Vidrio<div class="anotaciones">(sin precio)*</div></td>
                                   <td><div id="vidrio2_l3"></div></td>
                               </tr>
                               <tr>
                                   <td>Vinil</td>
                                   <td><div id="vinil_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>Bolsa</td>
                                   <td><div id="bolsa_l3">-</div></td>
                               </tr>
                               <tr>
                                   <td>Junquillo</td>
                                   <td><div id="junquillo_l3">-</div></td>
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
