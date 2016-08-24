<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
?>
   <html>
    <head>
        <title>
            Cancel Corredizo
        </title>
        <link rel="stylesheet" type="text/css" href="../style/estilos.css">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Cancelmex</a>
                <ul class="nav navbar-nav" id="navegador">
                   <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Cristales Templados <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="templado_corredizo.php">Cancel Corredizo</a>
                            </li>
                            <li>
                                <a href="puerta_doble_templado.php">Puerta Doble</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Perfiles <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_precios.php">Cotizacion de perfiles</a>
                            </li>
                            <li>
                                <a href="lista_precios_consulta.php">Lista de precios</a>
                            </li>
                        </ul>
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
                            <li class="divider" role="separator"></li>
                            <li>
                                <a href="ventana_c_antepecho.php">Ventana sencilla con antepecho</a>
                            </li>
                            <li>
                                <a href="ventana_c_ante_tres_hojas.php">Ventana tres hojas con antepecho</a>
                            </li>
                            <li>
                                <a href="ventana_c_ante_cuatro_hojas.php">Ventana cuatro hojas con antepecho</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="vetana_proyectable_sencilla.php">Ventana una hoja proyectable</a>
                            </li>
                            <li>
                                <a href="vetana_proyectable_2.php">Ventana dos hojas proyectable</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="ventana_sencilla_cuadriculada.php">Ventana cuadriculada</a>
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
                             <li role="separator" class="divider"></li>
                            <li>
                                <a href="puerta2_cuadriculada.php">Puertas cuadriculadas</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="puerta3_doble.php">Puerta doble 3"</a>
                            </li>
                            <li>
                                <a href="puerta1_doble.php">Puerta doble 1 3/4"</a>
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
               <form action="templado_corredizo.php?action=Calcular_112410960012" method="post">
                <table class="table">
                    <tr>
                        <th><input type="number" name="piezas" placeholder="Piezas" class="form-control"></th>
                        <th><input type="text" name="altura" placeholder="Altura" class="form-control"></th>
                        <th><input type="text" name="ancho" placeholder="Ancho" class="form-control"></th>
                        <th><button type="submit" class="btn btn-primary">Calcular</button></th>
                    </tr>
                </table>
                </form>
                <table class="table">
                   <?php
                $action=$_GET['action'];
                switch($action){
                    case "Calcular_112410960012":
                        $alto=$_POST["altura"];
                        $ancho=$_POST["ancho"];
                        $piezas=$_POST["piezas"];
                ?>
                  <td>
                   <table class="table" id="tabla_oculta_l2">
                       <tr id="fila_mostrada" >
                           <th colspan="3" class="encabezados_tablas"><center><button id="boton_menu_l2" onclick="mostrarDisplay_templado_corredizo('tabla_oculta_l2','boton_menu_l2')" class="btn btn-default"><span class="glyphicon glyphicon-menu-hamburger"></span></button>Cancel Corredizo</center></th>
                       </tr>
                       <tr id="primera_fila" style="display:none">
                           <td>Cristal Templado</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='cristal templado 6mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=($alto*$ancho)*$piezas;
                            $cristal_templado=$d*$unidad;
                           ?>
                           <td><div id="bs_2"><?php echo round($cristal_templado,2); ?></div></td>
                       </tr>
                       <tr style="display:none">
                           <td>Canto plano</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='canto plano recto 4 a 6mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=(($alto*2)+($ancho*2))*$piezas;
                            $canto_plano=$d*$unidad;
                           ?>
                           <td><div id="bl_2"><?php echo round($canto_plano,2); ?></div></td>
                       </tr>
                       <tr style="display:none">
                           <td>Barrenos</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='barrenos 4 a 6mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=$piezas;
                            $barrenos=$d*$unidad;
                           ?>
                           <td><div id="jun_2"><?php echo round($barrenos,2); ?></div></td>
                       </tr>
                       <tr id="filas_ocultas">
                           <td>Subtotal</td>
                           <?php
                            $suma_total_l3=$cristal_templado+$canto_plano+$barrenos;
                           ?>
                           <td><div id="suma_total_3"><?php echo round($suma_total_l3,2);?></div></td>
                       </tr>
                                <tr><td>IVA</td>
                                    <?php
                                        $iva=$suma_total_l3*.16;
                                    ?>
                                    <td><div id="claro_l2"><?php echo round($iva,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Total</td>
                                    <?php
                                        $total=$suma_total_l3+$iva;
                                    ?>

                                    <td><div id="tintex_l2" class="precios"><?php echo round($total,2); ?></div></td>
                                </tr>
                   </table>
               </td>
            <?php
                break;
                    default:
                        echo "<center><h2>Ingresa las medidas para comenzar a calcular</h2></center>";
                        break;
                }
                ?>

        </table>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</html>
