<html>
    <head>
        <title>Cotizacion Fijos</title>
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
                <th><input class="form-control" type="text" id="ancho_F" placeholder="Ancho"></th>
                <th><input class="form-control" type="text" id="alto_F" placeholder="Alto"></th>
                <th><button onclick="fijos()" class="btn btn-primary">Calcular</button></th>
            </tr>
        </table>
        <table class="table">
            <tr>
               <td>
                   <table class="table">
                       <tr>
                           <th colspan="2" class="encabezados_tablas"><center>Linea 2"</center></th>
                       </tr>
                       <tr>
                           <td>Bolsa superior</td>
                           <td><div id="bs_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Bolsa lateral</td>
                           <td><div id="bl_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Junquillo</td>
                           <td><div id="jun_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Escalonado</td>
                           <td><div id="esc_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Vinil</td>
                           <td><div id="vin_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Silicon</td>
                           <td><div id="sil_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Acrilastic</td>
                           <td><div id="acri_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Vidrio</td>
                           <td><div id="vid_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Suma Total</td>
                           <td><div id="suma_total_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Costo Total</td>
                           <td><div id="costo_total_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Claro</td>
                           <td><div class="precios" id="p_claro_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Tintex</td>
                           <td><div class="precios" id="p_tintex_2">-</div></td>
                       </tr>
                       <tr>
                           <td>Filtrasol</td>
                           <td><div class="precios" id="p_filtrasol_2">-</div></td>
                       </tr>
                   </table>
               </td>
               <td>
                   <table class="table">
                       <tr>
                           <th class="encabezados_tablas" colspan="2"><center>Linea 3"</center></th>
                       </tr>
                       <tr>
                           <td>Bolsa superior</td>
                           <td><div id="bs_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Bolsa lateral</td>
                           <td><div id="bl_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Junquillo</td>
                           <td><div id="jun_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Escalonado</td>
                           <td><div id="esc_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Vinil</td>
                           <td><div id="vin_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Silicon</td>
                           <td><div id="sil_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Acrilastic</td>
                           <td><div id="acri_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Vidrio</td>
                           <td><div id="vid_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Suma Total</td>
                           <td><div id="suma_total_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Costo Total</td>
                           <td><div id="costo_total_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Claro</td>
                           <td><div class="precios" id="p_claro_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Tintex</td>
                           <td><div class="precios" id="p_tintex_3">-</div></td>
                       </tr>
                       <tr>
                           <td>Filtrasol</td>
                           <td><div class="precios" id="p_filtrasol_3">-</div></td>
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
