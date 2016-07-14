<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
?>
   <html>
    <head>
        <title>Ventana Tres Hojas</title>
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../style/estilos.css">
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
                            <li>
                                <a href="pta_toda_vidrio.php">Puerta de Vidrio</a>
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
                       <form action="ventana_tres_hojas.php?action=calcular147963" method="post">
                        <th><input type="text" class="form-control" name="alto_V3H" placeholder="Alto"></th>
                        <th><input type="text" class="form-control" name="ancho_V3H" placeholder="Ancho"></th>
                        <th><input class="form-control" name="utilidad" value=".7" placeholder="70%"></th>
                        <th><input class="form-control" type="text" name="v_dolar" placeholder="Dolar"></th>
                        <td><button type="submit" class="btn btn-primary">Calcular</button></td>
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
                            case "calcular147963":
                                $alto=$_POST["alto_V3H"];
                                $ancho=$_POST["ancho_V3H"];
                                $dolar=$_POST["v_dolar"];
                                $utilidad=$_POST["utilidad"];
                        ?>
                        <td>
                            <table class="table">
                                <tr>
                                    <th colspan="2" class="encabezados_tablas"><center>Linea 2"</center></th>
                                </tr>
                                <tr>
                                    <td>Jamba Lat.</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='jamba 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_bolsal_l2=$alto*$m*2;
                                    ?>
                                    <td><div id="jamba_l2"><?php echo round($costo_bolsal_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Jamba Sup.</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='jamba c/mosq 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_bolsas_l2=$ancho*$m;
                                    ?>
                                    <td><div id="jamba_l2"><?php echo round($costo_bolsas_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Riel</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='riel 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_riel_l2=$ancho*$m;
                                    ?>
                                    <td><div id="riel_l2"><?php echo round($costo_riel_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='c. chapa 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_chapa_l2=$alto*$m*2;
                                    ?>
                                    <td><div id="cchapa_l2"><?php echo round($costo_chapa_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>C. Traslape</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='c. traslape 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_traslape_l2=$alto*$m*4;
                                    ?>
                                    <td><div id="ctraslape_l2"><?php echo round($costo_traslape_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito pta</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. puerta 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_zpuerta_l2=$ancho*$m;
                                    ?>
                                    <td><div id="zoclopt_l2"><?php echo round($costo_zpuerta_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito c</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. cabezal 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_zcabezal_l2=$ancho*$m;
                                    ?>
                                    <td><div id="zoclitoc_l2"><?php echo round($costo_zcabezal_l2,2);?></div></td>
                                </tr>
                                <tr>
                                    <td>Carretillas</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='carretilla 2\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_carretilla_l2=4*$m;
                                    ?>
                                    <td><div id="carretillas_l2"><?php echo round($costo_carretilla_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Jal. Embutir</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='jaladera 2\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_jaladera_l2=$m*2;
                                    ?>
                                    <td><div id="jalembutir_l2"><?php echo round($costo_jaladera_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Silicon</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='silicon'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_silicon_l2=$d;
                                    ?>
                                    <td><div id="silicon_l2"><?php echo round($costo_silicon_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Acrilastic</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='acrilastic'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_acrilastic_l2=$d;
                                    ?>
                                    <td><div id="acrilastica_l2"><?php echo round($costo_acrilastic_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Vinil</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='vinil'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $a=$ancho/4;
                                    $b=$a*2;
                                    $costo_vinil_l2=((($a*4)+($b*2)+($alto*6)))*$d;
                                    ?>
                                    <td><div id="vinil_l2"><?php echo round($costo_vinil_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Tornillos</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tornillo'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_tornillo_l2=16*$d;
                                    ?>
                                    <td><div id="tornillos_2"><?php echo round($costo_tornillo_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Suma total</td>
                                    <?php
                                    $suma_total_l2=$costo_bolsal_l2+$costo_bolsas_l2+$costo_riel_l2+$costo_chapa_l2+$costo_traslape_l2+
                                        $costo_zpuerta_l2+$costo_zcabezal_l2+$costo_silicon_l2+$costo_acrilastic_l2+
                                        $costo_vidrio_l2+$costo_vinil_l2+$costo_tornillo_l2+$costo_carretilla_l2+$costo_jaladera_l2;
                                    ?>
                                    <td><div id="suma_total_l2"><?php echo round($suma_total_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Claro</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='claro'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_claro_l2=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_claro_l2;
                                    $costo_claro_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td>
                                    <div id="claro_l2" class="precios"><?php echo round($costo_claro_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Chino</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='chino'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_chino_l2=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_chino_l2;
                                    $costo_chino_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div id="tintex_l2" class="precios"><?php echo round($costo_chino_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Filtrasol</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='filtrasol'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_filtrasol_l2=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_filtrasol_l2;
                                    $costo_filtrasol_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div id="filtrasol_l2" class="precios"><?php echo round($costo_filtrasol_l2,2); ?></div></td>
                                </tr>
                                   <tr>
                                    <td>Tintex</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tintex'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_tintex_l2=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_tintex_l2;
                                    $costo_tintex_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div id="esmerilado_l2" class="precios"><?php echo round($costo_tintex_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Satinado</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='satinado'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_satinado_l2=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_satinado_l2;
                                    $costo_satinado_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div class="precios"><?php echo round($costo_satinado_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Reflecta</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='reflecta'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_reflecta_l2=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_reflecta_l2;
                                    $costo_reflecta_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div class="precios"><?php echo round($costo_reflecta_l2,2); ?></div></td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <th colspan="2" class="encabezados_tablas"><center>Linea 3"</center></th>
                                </tr>
                                <tr>
                                    <td>Jamba Lat.</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='jamba 3\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_bolsal_l3=$alto*$m*2;
                                    ?>
                                    <td><div id="jamba_l3"><?php echo round($costo_bolsal_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Jamba Sup.</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='jamba c/mosq 3\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_bolsas_l3=$ancho*$m;
                                    ?>
                                    <td><div id="jamba_l3"><?php echo round($costo_bolsas_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Riel</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='riel 3\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_riel_l3=$ancho*$m;
                                    ?>
                                    <td><div id="riel_l3"><?php echo round($costo_riel_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='c. chapa 3\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_chapa_l3=$alto*$m*2;
                                    ?>
                                    <td><div id="cchapa_l3"><?php echo round($costo_chapa_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>C. Traslape</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='c. traslape 3\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_traslape_l3=$alto*$m*4;
                                    ?>
                                    <td><div id="ctraslape_l3"><?php echo round($costo_traslape_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito pta</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. puerta 3\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_zpuerta_l3=$ancho*$m;
                                    ?>
                                    <td><div id="zoclopt_l3"><?php echo round($costo_zpuerta_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Zoclito c</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. cabezal 3\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00)*$dolar;
                                    $costo_zcabezal_l3=$ancho*$m;
                                    ?>
                                    <td><div id="zoclitoc_l3"><?php echo round($costo_zcabezal_l3,2);?></div></td>
                                </tr>
                                <tr>
                                    <td>Carretillas</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='carretilla 3\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_carretilla_l3=4*$m;
                                    ?>
                                    <td><div id="carretillas_l3"><?php echo round($costo_carretilla_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Jal. Embutir</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='jaladera 3\"'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $costo_jaladera_l3=$m*2;
                                    ?>
                                    <td><div id="jalembutir_l3"><?php echo round($costo_jaladera_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Silicon</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='silicon'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_silicon_l3=$d;
                                    ?>
                                    <td><div id="silicon_l3"><?php echo round($costo_silicon_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Acrilastic</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='acrilastic'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_acrilastic_l3=$d;
                                    ?>
                                    <td><div id="acrilastica_l3"><?php echo round($costo_acrilastic_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Vinil</td><?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='vinil'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $a=$ancho/4;
                                    $b=$a*2;
                                    $costo_vinil_l3=((($a*4)+($b*2)+($alto*6)))*$d;
                                    ?>
                                    <td><div id="vinil_l3"><?php echo round($costo_vinil_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Tornillos</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tornillo'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_tornillo_l3=16*$d;
                                    ?>
                                    <td><div id="tornillos_3"><?php echo round($costo_tornillo_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Suma total</td>
                                    <?php
                                    $suma_total_l3=$costo_bolsal_l3+$costo_bolsas_l3+$costo_riel_l3+$costo_chapa_l3+$costo_traslape_l3+
                                        $costo_zpuerta_l3+$costo_zcabezal_l3+$costo_silicon_l3+$costo_acrilastic_l3+
                                        $costo_vidrio_l3+$costo_vinil_l3+$costo_tornillo_l3+$costo_carretilla_l3+$costo_jaladera_l3;
                                    ?>
                                    <td><div id="suma_total_l3"><?php echo round($suma_total_l3,2); ?></div></td>
                                </tr>
                                <tr><td>Claro</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='claro'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_claro_l3=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_claro_l3;
                                    $costo_claro_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div id="claro_l2" class="precios"><?php echo round($costo_claro_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Chino</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='chino'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_chino_l3=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_chino_l3;
                                    $costo_chino_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div id="tintex_l2" class="precios"><?php echo round($costo_chino_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Filtrasol</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='filtrasol'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_filtrasol_l3=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_filtrasol_l3;
                                    $costo_filtrasol_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div id="filtrasol_l2" class="precios"><?php echo round($costo_filtrasol_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Tintex</td>
                                    <?php
                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='tintex'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_tintex_l3=($ancho*$alto)*$d;
                                    $s=$suma_total_l3+$costo_tintex_l3;
                                    $costo_tintex_l3=($s*$utilidad)+$s;
                                    ?>
                                    <td><div id="esmerilado_l2" class="precios"><?php echo round($costo_tintex_l3,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Satinado</td>
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
