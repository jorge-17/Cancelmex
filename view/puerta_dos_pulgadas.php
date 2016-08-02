<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
?>
   <html>
    <head>
        <title>Puerta de 2"</title>
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
                    <tr><form action="puerta_dos_pulgadas.php?action=pta_2_pulgadas123987" method="post">
                       <th><input class="form-control" name="alto_pta_v" placeholder="Alto"></th>
                        <th><input class="form-control" name="ancho_pta_v" placeholder="Ancho"></th>
                        <th><input class="form-control" name="utilidad" value=".7" placeholder="70%"></th>
                        <th><input class="form-control" type="text" name="v_dolar" placeholder="Dolar"></th>
                        <td><button type="submit" class="btn btn-primary">Calcular</button></td>
                        <td><!-- FXEXCHANGERATE.COM EXCHANGE RATE CONVERTER START --><div style="width:196px;border:1px solid #2D6AB4;background-color:#F0F0F0;"><div style="text-align:left;background-color:#2D6AB4;border-bottom:0px;height:18px; font-size:12px;font-weight:bold;padding-top:2px; padding-left:5px"><span  style="background-image:url(http://ww.fxexchangerate.com/flag.png); background-position: 0 -2064px; width:100%; height:15px; background-repeat:no-repeat;padding-left:2px;"><a href="http://usd.fxexchangerate.com/" target="_blank" style="color:#FFFFFF; text-decoration:none;padding-left:22px;">Dólar estadounidense</a></span></div><script type="text/javascript">var fm="USD";var ft="MXN,";var hb="2D6AB4";var hc="FFFFFF";var bb = "F0F0F0";var bo = "2D6AB4";var tz="-6s";var wh="196x80";var lg="es";</script><script type="text/javascript" src="http://www.fxexchangerate.com/converter.php"></script></div><!-- FXEXCHANGERATE.COM  EXCHANGE RATE CONVERTER END -->
                       </td>
                    </tr></form>
                </table>
                <table class="table">
                    <tr>
                       <?php
                        $action=$_GET["action"];

                        switch($action){
                            case "pta_2_pulgadas123987":
                                $alto=$_POST['alto_pta_v'];
                                $ancho=$_POST['ancho_pta_v'];
                                $dolar=$_POST["v_dolar"];
                                $utilidad=$_POST["utilidad"];
                        ?>
                        <td>
                            <table class="table" id="tabla_puerta2">
                                <tr>
                                    <th colspan="2" class="encabezados_tablas"><center><button id="boton_menu" onclick="mostrarDisplay_puerta2('tabla_puerta2')" class="btn btn-default"><span class="glyphicon glyphicon-menu-hamburger"></span></button>Linea 2"</center></th>
                                </tr>
                                <tr style="display:none">
                                    <td>Batiente doble vena lateral</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='batiente_d_vena'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_batientel_l2=($alto*2)*$m;
                                    ?>
                                    <td><div id="batiente_l3"><?php echo round($costo_batientel_l2,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Batiente doble vena superior</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='batiente_d_vena'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_batientes_l3=$ancho*$m;
                                    ?>
                                    <td><div><?php echo round($costo_batientes_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>C. Chapa</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='c. chapa 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_cchapa_l3=($alto*2)*$m;
                                    ?>
                                    <td><div id="chapa_l3"><?php echo round($costo_cchapa_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Zoclo pta</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. puerta 2\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_zpuerta_l3=$ancho*$m;
                                    ?>
                                    <td><div id="zocolopta_l3"><?php echo round($costo_zpuerta_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Zoclo cabezal</td>
                                     <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. cabezal 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_zcabezal_l3=$ancho*$m;
                                    ?>
                                    <td><div id="ventana_l3"><?php echo round($costo_zcabezal_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Duela</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='duela'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    if($alto<=2.1){
                                        $alto_d=1.0;
                                        $c=$ancho/.125;
                                        $a=ceil($c);
                                        $t=$a*$alto_d;
                                        $p_duela=$m/6;
                                        $costo_duela_l2=$t*$p_duela;
                                    }elseif($alto>2.1 && $alto<=2.3){
                                        $alto_d=1.1;
                                        $c=$ancho/.125;
                                        $a=ceil($c);
                                        $t=$a*$alto_d;
                                        $p_duela=$m/6;
                                        $costo_duela_l2=$t*$p_duela;
                                    }
                                    ?>
                                    <td><div><?php echo round($costo_duela_l2,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Intermedio</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='intermedio 2\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_intermedio_l3=$ancho*$m;
                                    ?>
                                    <td><div><?php echo round($costo_intermedio_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Bisagras de libro</td>
                                     <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='bisagra_libro'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_bisagras_l3=$m*3;
                                    ?>
                                    <td><div class="pivoted_l3"><?php echo round($costo_bisagras_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Trompas de elefante</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='trompa_elefante'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_trompas_l3=$m*2;
                                    ?>
                                    <td><div id="chapadm_l3"><?php echo round($costo_trompas_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Acrilastic</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='acrilastic'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_acrilastic_l3=(($alto*2)+($ancho*2))*$m;
                                    ?>
                                    <td><div id="acrilastica_l3"><?php echo round($costo_acrilastic_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Tornillos</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tornillo'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_tornillos_l3=8*$m;
                                    ?>
                                    <td><div id="tornillos_l3"><?php echo round($costo_tornillos_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Vinil</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='vinil'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_vinil_l3=(($ancho*2)+($alto*2))*$m;
                                    ?>
                                    <td><div id="vinil_l3"><?php echo round($costo_vinil_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Suma Total</td>
                                    <?php
                                    $suma_total_l3=$costo_batientel_l2+$costo_batientes_l3+$costo_cchapa_l3+$costo_zpuerta_l3+
                                        $costo_zcabezal_l3+$costo_bisagras_l3+$costo_trompas_l3+$costo_acrilastic_l3+$costo_tornillos_l3+
                                        $costo_vinil_l3;

                                    $suma_total_l3_z=$costo_batientel_l2+$costo_batientes_l3+$costo_cchapa_l3+$costo_zpuerta_l3+
                                        $costo_zcabezal_l3+$costo_bisagras_l3+$costo_trompas_l3+$costo_acrilastic_l3+$costo_tornillos_l3+
                                        $costo_vinil_l3+$costo_duela_l2+$costo_intermedio_l3;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div id="suma_total_l3"><?php echo round($suma_total_l3,2); ?></div></td>
                                                <td><div><?php echo round($suma_total_l3_z,2); ?>*</div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr><td rowspan="2">Claro</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='claro'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_claro_l3_q=($ancho*$alto)*$d;
                                    $costo_claro_c_duela=(($alto/2)*$ancho)*$d;

                                    $s=$suma_total_l3+$costo_claro_l3_q;
                                    $costo_claro_l3=($s*$utilidad)+$s;

                                    $s_2=$suma_total_l3_z+$costo_claro_c_duela;
                                    $costo_claro_l3_z=($s_2*$utilidad)+$s_2;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div><?php echo $costo_claro_l3_q; ?></div></td>
                                                <td><div><?php echo $costo_claro_c_duela; ?>*</div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr><td>
                                    <table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_claro_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_claro_l3_z,2); ?>*</div></td>
                                        </tr>
                                    </table>
                                </td></tr>
                                <tr>
                                    <td rowspan="2">Chino</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='chino'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_chino_l3_q=($ancho*$alto)*$d;
                                    $costo_chino_c_duela=(($alto/2)*$ancho)*$d;

                                    $s=$suma_total_l3+$costo_chino_l3_q;
                                    $costo_chino_l3=($s*$utilidad)+$s;

                                    $s_2=$suma_total_l3_z+$costo_chino_c_duela;
                                    $costo_chino_l3_z=($s_2*$utilidad)+$s_2;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div><?php echo $costo_chino_l3_q; ?></div></td>
                                                <td><div><?php echo $costo_chino_c_duela; ?>*</div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                    <tr><td>
                                       <table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_chino_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_chino_l3_z,2); ?>*</div></td>
                                        </tr>
                                    </table>
                                        </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Satinado</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='satinado'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_satinado_l3_q=($ancho*$alto)*$d;
                                    $costo_satinado_c_duela=(($alto/2)*$ancho)*$d;

                                    $s=$suma_total_l3+$costo_satinado_l3_q;
                                    $costo_satinado_l3=($s*$utilidad)+$s;

                                    $s_2=$suma_total_l3_z+$costo_satinado_c_duela;
                                    $costo_satinado_l3_z=($s_2*$utilidad)+$s_2;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div><?php echo $costo_satinado_l3_q; ?></div></td>
                                                <td><div><?php echo $costo_satinado_c_duela; ?>*</div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                   <tr>
                                    <td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_satinado_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_satinado_l3_z,2); ?>*</div></td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Plastico</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='plastico'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_plastico_l3_q=($ancho*$alto)*$d;
                                    $costo_plastico_c_duela=(($alto/2)*$ancho)*$d;

                                    $s=$suma_total_l3+$costo_plastico_l3_q;
                                    $costo_plastico_l3=($s*$utilidad)+$s;

                                    $s_2=$suma_total_l3_z+$costo_plastico_c_duela;
                                    $costo_plastico_l3_z=($s_2*$utilidad)+$s_2;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div><?php echo $costo_plastico_l3_q; ?></div></td>
                                                <td><div><?php echo $costo_plastico_c_duela; ?>*</div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                   <tr>
                                    <td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_plastico_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_plastico_l3_z,2); ?>*</div></td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Acrilico</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='acrilico'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_acrilico_l3_q=($ancho*$alto)*$d;
                                    $costo_acrilico_c_duela=(($alto/2)*$ancho)*$d;

                                    $s=$suma_total_l3+$costo_acrilico_l3_q;
                                    $costo_acrilico_l3=($s*$utilidad)+$s;

                                    $s_2=$suma_total_l3_z+$costo_acrilico_c_duela;
                                    $costo_acrilico_l3_z=($s_2*$utilidad)+$s_2;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div><?php echo $costo_acrilico_l3_q; ?></div></td>
                                                <td><div><?php echo $costo_acrilico_c_duela; ?>*</div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                   <tr>
                                    <td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_acrilico_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_acrilico_l3_z,2); ?>*</div></td>
                                        </tr>
                                    </table></td>
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
