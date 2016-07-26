<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
?>
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
        <table class="table">
            <tr>
               <form action="fijos.php?action=calcular1726" method="post">
                <th><input class="form-control" type="text" name="alto_F" placeholder="Alto"></th>
                <th><input class="form-control" type="text" name="ancho_F" placeholder="Ancho"></th>
                <th><input class="form-control" name="utilidad" value=".7" placeholder="70%"></th>
                <th><input class="form-control" type="text" name="v_dolar" placeholder="Dolar"></th>
                <th><button type="submit" class="btn btn-primary">Calcular</button></th>
                </form>

               <td><!-- FXEXCHANGERATE.COM EXCHANGE RATE CONVERTER START --><div style="width:196px;border:1px solid #2D6AB4;background-color:#F0F0F0;"><div style="text-align:left;background-color:#2D6AB4;border-bottom:0px;height:18px; font-size:12px;font-weight:bold;padding-top:2px; padding-left:5px"><span  style="background-image:url(http://ww.fxexchangerate.com/flag.png); background-position: 0 -2064px; width:100%; height:15px; background-repeat:no-repeat;padding-left:2px;"><a href="http://usd.fxexchangerate.com/" target="_blank" style="color:#FFFFFF; text-decoration:none;padding-left:22px;">Dólar estadounidense</a></span></div><script type="text/javascript">var fm="USD";var ft="MXN,";var hb="2D6AB4";var hc="FFFFFF";var bb = "F0F0F0";var bo = "2D6AB4";var tz="-6s";var wh="196x80";var lg="es";</script><script type="text/javascript" src="http://www.fxexchangerate.com/converter.php"></script></div><!-- FXEXCHANGERATE.COM  EXCHANGE RATE CONVERTER END -->
               </td>
            </tr>
        </table>
        <table class="table">
            <tr>
            <?php
                $action=$_GET['action'];
                switch($action){
                    case "calcular1726":
                        $alto=$_POST["alto_F"];
                        $ancho=$_POST["ancho_F"];
                        $dolar=$_POST["v_dolar"];
                        $utilidad=$_POST["utilidad"];
                ?>
               <td>
                   <table class="table">
                       <tr>
                           <th colspan="3" class="encabezados_tablas"><center>Linea 2"</center></th>
                       </tr>
                       <tr>
                           <td>Bolsa superior</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='bolsa 2\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.00)*$dolar;
                            $costo_bolsas_l2=$ancho*$m;
                           ?>
                           <td><div id="bs_2"><?php echo round($costo_bolsas_l2,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Bolsa lateral</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='bolsa 2\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.00)*$dolar;
                            $costo_bolsal_l2=2*$ancho*$m;
                           ?>
                           <td><div id="bl_2"><?php echo round($costo_bolsal_l2,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Junquillo</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='junquillo 2\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.00)*$dolar;
                            $costo_junquillo_l2=$ancho*$m;
                           ?>
                           <td><div id="jun_2"><?php echo round($costo_junquillo_l2,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Escalonado</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='escalonado 2\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.00)*$dolar;
                            $costo_escalonado_l2=$ancho*$m;
                           ?>
                           <td><div id="esc_2"><?php echo round($costo_escalonado_l2,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Vinil</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='vinil'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $costo_vinil_l2=(($ancho*2)+($alto*2))*$d;
                           ?>
                           <td><div id="vin_2"><?php echo round($costo_vinil_l2,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Silicon</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='silicon'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $costo_silicon_l2=$d;
                           ?>
                           <td><div id="sil_2"><?php echo round($costo_silicon_l2,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Acrilastic</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='acrilastic'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $costo_acrilastic_l2=(($alto*2)+($ancho*2))*$d;
                           ?>
                           <td><div id="acri_2"><?php echo round($costo_acrilastic_l2,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Tornillos</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tornillo'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $costo_tornillo_l2=8*$d;
                           ?>
                           <td><div id="tornillos_2"><?php echo round($costo_tornillo_l2,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Suma Total</td>
                           <?php                            $suma_total_l2=$costo_bolsas_l2+$costo_bolsal_l2+$costo_junquillo_l2+$costo_escalonado_l2+$costo_vinil_l2+$costo_silicon_l2+$costo_acrilastic_l2+$costo_tornillo_l2;
                           ?>
                           <td><div id="suma_total_2"><?php echo round($suma_total_l2,2); ?></div></td>
                       </tr>
                                <tr>
                                    <td rowspan="2">Claro</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='claro'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_claro_l2_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_claro_l2_v;
                                    $costo_claro_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_claro_l2_v,2); ?></div></td>
                               </tr>
                                <tr>
                                    <td>
                                    <div id="claro_l2" class="precios"><?php echo round($costo_claro_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Chino</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='chino'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_chino_l2_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_chino_l2_v;
                                    $costo_chino_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_chino_l2_v,2); ?></div></td>
                       </tr>
                                   <tr>
                                    <td><div id="tintex_l2" class="precios"><?php echo round($costo_chino_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Filtrasol</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='filtrasol'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_filtrasol_l2_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_filtrasol_l2_V;
                                    $costo_filtrasol_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_filtrasol_l2_v,2); ?></div></td>
                       </tr>
                                   <tr>
                                    <td><div id="filtrasol_l2" class="precios"><?php echo round($costo_filtrasol_l2,2); ?></div></td>
                                </tr>
                                   <tr>
                                    <td rowspan="2">Tintex</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tintex'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_tintex_l2_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_tintex_l2_v;
                                    $costo_tintex_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_tintex_l2_v,2); ?></div></td>
                       </tr>
                                   <tr>
                                    <td><div id="esmerilado_l2" class="precios"><?php echo round($costo_tintex_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Satinado</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='satinado'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_satinado_l2_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_satinado_l2_v;
                                    $costo_satinado_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_satinado_l2_v,2); ?></div></td>
                       </tr>
                                   <tr>
                                    <td><div class="precios"><?php echo round($costo_satinado_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Reflecta</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='reflecta'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_reflecta_l2_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_reflecta_l2_v;
                                    $costo_reflecta_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_reflecta_l2_v,2); ?></div></td>
                       </tr>
                                   <tr>
                                    <td><div class="precios"><?php echo round($costo_reflecta_l2,2); ?></div></td>
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
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='bolsa 3\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.00)*$dolar;
                            $costo_bolsas_l3=$ancho*$m;
                           ?>
                           <td><div id="bs_3"><?php echo round($costo_bolsas_l3,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Bolsa lateral</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='bolsa 3\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.00)*$dolar;
                            $costo_bolsal_l3=2*$ancho*$m;
                           ?>
                           <td><div id="bl_3"><?php echo round($costo_bolsal_l3,2);?></div></td>
                       </tr>
                       <tr>
                           <td>Junquillo</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='junquillo 3\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.00)*$dolar;
                            $costo_junquillo_l3=$ancho*$m;
                           ?>
                           <td><div id="jun_3"><?php echo round($costo_junquillo_l3,2);?></div></td>
                       </tr>
                       <tr>
                           <td>Escalonado</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='escalonado 3\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.00)*$dolar;
                            $costo_escalonado_l3=$ancho*$m;
                           ?>
                           <td><div id="esc_3"><?php echo round($costo_escalonado_l3,2);?></div></td>
                       </tr>
                       <tr>
                           <td>Vinil</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='vinil'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $costo_vinil_l3=(($ancho*2)+($alto*2))*$d;
                           ?>
                           <td><div id="vin_3"><?php echo round($costo_vinil_l3,2);?></div></td>
                       </tr>
                       <tr>
                           <td>Silicon</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='silicon'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $costo_silicon_l3=$d;
                           ?>
                           <td><div id="sil_3"><?php echo round($costo_silicon_l3,2);?></div></td>
                       </tr>
                       <tr>
                           <td>Acrilastic</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='acrilastic'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $costo_acrilastic_l3=(($alto*2)+($ancho*2))*$d;
                           ?>
                           <td><div id="acri_3"><?php echo round($costo_acrilastic_l3,2);?></div></td>
                       </tr>
                       <tr>
                           <td>Tornillos</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tornillo'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $costo_tornillo_l3=8*$d;
                           ?>
                           <td><div id="tornillos_3"><?php echo round($costo_tornillo_l3,2); ?></div></td>
                       </tr>
                       <tr>
                           <td>Suma Total</td>
                           <?php                            $suma_total_l3=$costo_bolsas_l3+$costo_bolsal_l3+$costo_junquillo_l3+$costo_escalonado_l3+$costo_vinil_l3+$costo_silicon_l3+$costo_acrilastic_l3+$costo_tornillo_l3;
                           ?>
                           <td><div id="suma_total_3"><?php echo round($suma_total_l3,2);?></div></td>
                       </tr>
                                <tr><td rowspan="2">Claro</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='claro'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_claro_l3_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_claro_l3_v;
                                    $costo_claro_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_claro_l3_v,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td><div id="claro_l2" class="precios"><?php echo round($costo_claro_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Chino</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='chino'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_chino_l3_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_chino_l3_v;
                                    $costo_chino_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_chino_l3_v,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td><div id="tintex_l2" class="precios"><?php echo round($costo_chino_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Filtrasol</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='filtrasol'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_filtrasol_l3_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_filtrasol_l3_v;
                                    $costo_filtrasol_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_filtrasol_l3_v,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td><div id="filtrasol_l2" class="precios"><?php echo round($costo_filtrasol_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Tintex</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tintex'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_tintex_l3_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_tintex_l3_v;
                                    $costo_tintex_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_tintex_l3_v,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td><div id="esmerilado_l2" class="precios"><?php echo round($costo_tintex_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Satinado</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='satinado'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_satinado_l3=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_satinado_l3;
                                    $costo_satinado_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div class="precios"><?php echo round($costo_satinado_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Reflecta</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='reflecta'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_reflecta_l3=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_reflecta_l3;
                                    $costo_reflecta_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div class="precios"><?php echo round($costo_reflecta_l3,2); ?></div></td>
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
            </tr>
        </table>
        </div>
        </div>
    </body>
    <script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</html>
