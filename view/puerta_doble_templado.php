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
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Ventanas con antepecho <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="ventana_c_antepecho.php">Ventana sencilla</a>
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
                             <li role="separator" class="divider"></li>
                            <li>
                                <a href="puerta2_cuadriculada.php">Puerta cuadriculada de 2"</a>
                            </li>
                            <li>
                                <a href="puerta3_cuadriculada.php">Puerta cuadriculada de 3"</a>
                            </li>
                            <li>
                                <a href="puerta1_cuadriculada.php">Puerta cuadriculada de 1 3/4"</a>
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
               <form action="puerta_doble_templado.php?action=Calcular_112410960012" method="post">
                <table class="table">
                    <tr>
                        <th><table class="table">
                            <tr><th>Puerta</th><th><input class="form-control" type="number" name="puerta_p" placeholder="Piezas"></th></tr>
                            <tr><th>Fijo</th><th><input class="form-control" type="number" name="fijo_p" placeholder="PIezas"></th></tr>
                        </table></th>
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
                        $piezas_puerta=$_POST["puerta_p"];
                        $piezas_fijo=$_POST["fijo_p"];
                ?>
                  <td>
                   <table class="table" id="tabla_oculta_l2">
                       <tr id="fila_mostrada" >
                           <th colspan="3" class="encabezados_tablas"><center><button id="boton_menu_l2" onclick="mostrarDisplay_templado_puerta('tabla_oculta_l2','boton_menu_l2')" class="btn btn-default"><span class="glyphicon glyphicon-menu-hamburger"></span></button>Puerta Doble</center></th>
                       </tr>
                       <tr id="primera_fila" style="display:none">
                           <td>Cristal Templado Puerta</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='cristal templado 9.5mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $ancho_p=$ancho-0.01;
                            $alto_p=$alto-0.01;
                            $unidad=($alto_p*$ancho_p)*$piezas_puerta;
                            $cristal_templado_p=$d*$unidad;
                           ?>
                           <td><div id="bs_2"><?php echo round($cristal_templado_p,3); ?></div></td>
                       </tr>
                       <tr style="display:none">
                           <td>Canto Plano Puerta</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='canto plano recto 9.5mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=(($alto_p*2)+($ancho_p*2))*$piezas_puerta;
                            $canto_plano_p=$d*$unidad;
                           ?>
                           <td><div id="bl_2"><?php echo round($canto_plano_p,2); ?></div></td>
                       </tr>
                       <tr style="display:none">
                           <td>Resaques Puerta</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='resaque bisagra/chapa 9.5mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=2*$piezas_puerta;
                            $canto_plano_p=$d*$unidad;
                           ?>
                           <td><div id="bl_2"><?php echo round($canto_plano_p,2); ?></div></td>
                       </tr>
                       <tr style="display:none">
                           <td>Barrenos Puerta</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='barrenos 9.5mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=$piezas_puerta;
                            $barrenos_p=$d*$unidad;
                           ?>
                           <td><div id="jun_2"><?php echo round($barrenos_p,2); ?></div></td>
                       </tr>
                       <tr id="primera_fila" style="display:none">
                           <td>Cristal Templado Fija</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='cristal templado 9.5mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=($alto*$ancho)*$piezas_fijo;
                            $cristal_templado_f=$d*$unidad;
                           ?>
                           <td><div id="bs_2"><?php echo round($cristal_templado_f,2); ?></div></td>
                       </tr>
                       <tr style="display:none">
                           <td>Canto Plano Fijo</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='canto plano recto 9.5mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=(($alto*2)+($ancho*2))*$piezas_fijo;
                            $canto_plano_f=$d*$unidad;
                           ?>
                           <td><div id="bl_2"><?php echo round($canto_plano_f,2); ?></div></td>
                       </tr>
                       <tr style="display:none">
                           <td>Resaques Fijo</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='resaque bisagra/chapa 9.5mm'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $unidad=2*$piezas_fijo;
                            $canto_plano_f=$d*$unidad;
                           ?>
                           <td><div id="bl_2"><?php echo round($canto_plano_f,2); ?></div></td>
                       </tr>
                       <tr id="filas_ocultas">
                           <td>Subtotal</td>
                           <?php
                            $suma_total_l3=$cristal_templado_p+$canto_plano_p+$canto_plano_p+$barrenos_p+$cristal_templado_f+
                                $canto_plano_f+$canto_plano_f;

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
