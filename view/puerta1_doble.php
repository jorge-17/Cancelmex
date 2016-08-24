<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
?>
   <html>
    <head>
        <title>Puerta de 1 3/4"</title>
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
                <table class="table">
                    <tr><form action="puerta1_doble.php?action=pta_3/4_pulgadas123987" method="post">
                       <th><input class="form-control" name="alto_pta_v" placeholder="Alto"></th>
                        <th><input class="form-control" name="ancho_pta_v" placeholder="Ancho"></th>
                        <th><input class="form-control" name="utilidad" value=".7" placeholder="70%"></th>
                        <th><input class="form-control" type="text" name="v_dolar" placeholder="Dolar"></th>
                        <td><button type="submit" class="btn btn-primary">Calcular</button></td>
                        <td><!-- FXEXCHANGERATE.COM EXCHANGE RATE CONVERTER START --><div style="width:196px;border:1px solid #2D6AB4;background-color:#F0F0F0;"><div style="text-align:left;background-color:#2D6AB4;border-bottom:0px;height:18px; font-size:12px;font-weight:bold;padding-top:2px; padding-left:5px"><span  style="background-image:url(http://ww.fxexchangerate.com/flag.png); background-position: 0 -2064px; width:100%; height:15px; background-repeat:no-repeat;padding-left:2px;"><a href="http://usd.fxexchangerate.com/" target="_blank" style="color:#FFFFFF; text-decoration:none;padding-left:22px;">Dólar estadounidense</a></span></div><script type="text/javascript">var fm="USD";var ft="MXN,";var hb="2D6AB4";var hc="FFFFFF";var bb = "F0F0F0";var bo = "2D6AB4";var tz="-6s";var wh="196x80";var lg="es";</script><script type="text/javascript" src="http://www.fxexchangerate.com/converter.php"></script></div><!-- FXEXCHANGERATE.COM  EXCHANGE RATE CONVERTER END -->
                       </td>
                       </form>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                       <?php
                        $action=$_GET["action"];

                        switch($action){
                            case "pta_3/4_pulgadas123987":
                                $alto=$_POST['alto_pta_v'];
                                $ancho=$_POST['ancho_pta_v'];
                                $dolar=$_POST["v_dolar"];
                                $utilidad=$_POST["utilidad"];
                        ?>
                        <td>
                            <table class="table" id="tabla_puerta1">
                                <tr>
                                    <th colspan="2" class="encabezados_tablas"><center><button class="btn btn-default" id="boton_menu" onclick="mostrarDisplay_puerta1_d('tabla_puerta1')"><span class="glyphicon glyphicon-menu-hamburger"></span></button>Linea 1 3/4"</center></th>
                                </tr>
                                <tr style="display:none">
                                    <td>Canal Liso</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='bolsa lisa 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    if((($alto*2)+$ancho)<=9){
                                        $costo_bolsal_l3=($d*1.5);
                                    }else{
                                        $costo_bolsal_l3=($d*2);
                                    }
                                    ?>
                                    <td><div id="canall_l3"><?php echo round($costo_bolsal_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Batiente 3/4</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='batiente 3/4'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $n=$d*1.5;
                                    if((($alto*2)+$ancho)<=9){
                                        $costo_batientel_l3=($n*1.5);
                                    }else{
                                        $costo_batientel_l3=($n*2);
                                    }
                                    ?>
                                    <td><div id="batiente_l3"><?php echo round($costo_batientel_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>C. Chapa</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='c. chapa 1 3/4\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    if(($alto*4)<=4.6){
                                        $costo_cchapa_l3=$d;
                                    }elseif(($alto*4)>4.6 && ($alto*4)<=9.2){
                                        $costo_cchapa_l3=($d*2);
                                    }
                                    ?>
                                    <td><div id="chapa_l3"><?php echo round($costo_cchapa_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Zoclo pta</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. puerta 1 3/4\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_zpuerta_l3=$ancho*$m;
                                    ?>
                                    <td><div id="zocolopta_l3"><?php echo round($costo_zpuerta_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Zoclo cabezal</td>
                                     <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. cabezal 1 3/4\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_zcabezal_l3=$ancho*$m;
                                    ?>
                                    <td><div id="ventana_l3"><?php echo round($costo_zcabezal_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Junquillo</td>
                                     <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='junquillo 1 3/4\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00);
                                    $costo_junquillo_l3=(($ancho*8)+($alto*8))*$m;
                                    ?>
                                    <td><div id="ventana_l3"><?php echo round($costo_junquillo_l3,2); ?></div></td>
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
                                        $costo_duela_l3=$t*$p_duela;
                                    }elseif($alto>2.1 && $alto<=2.3){
                                        $alto_d=1.1;
                                        $c=$ancho/.125;
                                        $a=ceil($c);
                                        $t=$a*$alto_d;
                                        $p_duela=$m/6;
                                        $costo_duela_l3=$t*$p_duela;
                                    }
                                    ?>
                                    <td><div><?php echo round($costo_duela_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Intermedio</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='intermedio 3/4\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_intermedio_l3=$ancho*$m;
                                    ?>
                                    <td><div><?php echo round($costo_intermedio_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Junquillo con duela</td>
                                     <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='junquillo 1 3/4\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00);
                                    $costo_junquillo_duela_l3=($ancho*8)*$m;
                                    ?>
                                    <td><div id="ventana_l3"><?php echo round($costo_junquillo_duela_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Pivote descentrado</td>
                                     <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='pivote_descentrado 1.75\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_pivotedes_l3=$m;
                                    ?>
                                    <td><div class="pivoted_l3"><?php echo round($costo_pivotedes_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Barilla roscada</td>
                                     <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='barilla_rosacada_1'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_barilla_l3=$m*4;
                                    ?>
                                    <td><div class="pivoted_l3"><?php echo round($costo_barilla_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Chapa doble manija</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='chapa_d_manija_mariposa'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_manija_l3=$m;
                                    ?>
                                    <td><div id="chapadm_l3"><?php echo round($costo_manija_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Pasador maroma</td>
                                     <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='pasador_maroma'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_pasador_l3=$m*2;
                                    ?>
                                    <td><div class="pivoted_l3"><?php echo round($costo_pasador_l3,2); ?></div></td>
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
                                    $suma_total_l3=$costo_bolsal_l3+$costo_batientel_l3+$costo_cchapa_l3+$costo_zpuerta_l3+
                                        $costo_zcabezal_l3+$costo_junquillo_l3+$costo_pivotedes_l3+$costo_barilla_l3+
                                        $costo_manija_l3+$costo_pasador_l3+$costo_acrilastic_l3+$costo_tornillos_l3+
                                        $costo_vinil_l3;

                                    $suma_total_l3_z=$costo_bolsal_l3+$costo_batientel_l3+$costo_cchapa_l3+$costo_zpuerta_l3+
                                        $costo_zcabezal_l3+$costo_junquillo_l3+$costo_pivotedes_l3+$costo_barilla_l3+
                                        $costo_manija_l3+$costo_pasador_l3+$costo_acrilastic_l3+$costo_tornillos_l3+
                                        $costo_vinil_l3+$costo_duela_l3+$costo_intermedio_l3+$costo_junquillo_duela_l3;
                                    ?>
                                    <td><table class="mini_tablas">
                                            <tr>
                                                <td><div id="suma_total_l3"><?php echo round($suma_total_l3,2); ?></div></td>
                                                <td><div><?php echo round($suma_total_l3_z,2); ?>*</div></td>
                                            </tr>
                                        </table></td>
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
                                <tr><td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_claro_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_claro_l3_z,2); ?>*</div></td>
                                        </tr>
                                    </table></td></tr>
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
                                                <td><div><?php echo $costo_chino_c_duela; ?></div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                    <tr><td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_chino_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_chino_l3_z,2); ?></div></td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Filtrasol</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='filtrasol'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_filtrasol_l3_q=($ancho*$alto)*$d;
                                    $costo_filtrasol_c_duela=(($alto/2)*$ancho)*$d;

                                    $s=$suma_total_l3+$costo_filtrasol_l3_q;
                                    $costo_filtrasol_l3=($s*$utilidad)+$s;

                                    $s_2=$suma_total_l3_z+$costo_filtrasol_c_duela;
                                    $costo_filtrasol_l3_z=($s_2*$utilidad)+$s_2;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div><?php echo $costo_filtrasol_l3_q; ?></div></td>
                                                <td><div><?php echo $costo_filtrasol_c_duela; ?></div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                   <tr>
                                    <td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_filtrasol_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_filtrasol_l3_z,2); ?></div></td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Tintex</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tintex'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_tintex_l3_q=($ancho*$alto)*$d;
                                    $costo_tintex_c_duela=(($alto/2)*$ancho)*$d;

                                    $s=$suma_total_l3+$costo_tintex_l3_q;
                                    $costo_tintex_l3=($s*$utilidad)+$s;

                                    $s_2=$suma_total_l3_z+$costo_tintex_c_duela;
                                    $costo_tintex_l3_z=($s_2*$utilidad)+$s_2;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div><?php echo $costo_tintex_l3_q; ?></div></td>
                                                <td><div><?php echo $costo_tintex_c_duela; ?>*</div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                   <tr>
                                    <td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_tintex_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_tintex_l3_z,2); ?></div></td>
                                        </tr>
                                    </table></td>
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
                                                <td><div><?php echo $costo_satinado_c_duela; ?></div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                   <tr>
                                    <td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_satinado_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_satinado_l3_z,2); ?></div></td>
                                        </tr>
                                    </table></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Reflecta</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='reflecta'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_reflecta_l3_q=($ancho*$alto)*$d;
                                    $costo_refelcta_c_duela=(($alto/2)*$ancho)*$d;

                                    $s=$suma_total_l3+$costo_reflecta_l3_q;
                                    $costo_reflecta_l3=($s*$utilidad)+$s;

                                    $s_2=$suma_total_l3_z+$costo_refelcta_c_duela;
                                    $costo_reflecta_l3_z=($s_2*$utilidad)+$s_2;
                                    ?>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                                <td><div><?php echo  $costo_reflecta_l3_q; ?></div></td>
                                                <td><div><?php echo $costo_refelcta_c_duela; ?></div></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                   <tr>
                                    <td><table class="mini_tablas">
                                        <tr>
                                            <td><div class="precios"><?php echo round($costo_reflecta_l3,2); ?></div></td>
                                            <td><div class="precios"><?php echo round($costo_reflecta_l3_z,2); ?></div></td>
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
