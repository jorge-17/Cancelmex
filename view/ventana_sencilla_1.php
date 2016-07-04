<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
?>
   <html>
    <head>
        <title>Ventana fija</title>
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
                       <form action="ventana_sencilla_1.php?action=calcular17266271" method="post">
                        <th><input type="text" name="alto_VS" placeholder="Alto" class="form-control"></th>
                        <th><input type="text" name="ancho_VS" placeholder="Ancho" class="form-control"></th>
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
                            case "calcular17266271":
                                $alto=$_POST["alto_VS"];
                                $ancho=$_POST["ancho_VS"];
                                $dolar=$_POST["v_dolar"];
                                $utilidad=$_POST["utilidad"];
                        ?>
                        <td>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <th colspan="2" class="encabezados_tablas"><center>Linea 2"</center></th>
                                </tr>
                                <tr>
                                    <td>Jamba</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='jamba 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.10)*$dolar;
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
                                    $m=($d/6.10)*$dolar;
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
                                    $m=($d/6.10)*$dolar;
                                    $costo_riel_l2=$ancho*$m;
                                    ?>
                                    <td><div id="riel_l2"><?php echo round($costo_riel_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>C. Chapa</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='c. chapa 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.10)*$dolar;
                                    $costo_chapa_l2=$alto*$m*2;
                                    ?>
                                    <td><div id="cchapa_l2"><?php echo round($costo_chapa_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>C. Traslape</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='c. traslape 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.10)*$dolar;
                                    $costo_traslape_l2=$alto*$m*2;
                                    ?>
                                    <td><div id="ctraslape_l2"><?php echo round($costo_traslape_l2,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td>Zoclo pta</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='z. puerta 2\"'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.10)*$dolar;
                                    $costo_zpuerta_l2=$ancho*$m;
                                    ?>
                                    <td><div id="zoclopt_l2"><?php echo round($costo_zpuerta_l2,2); ?></div></td>
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
                                    <th colspan="2" class="encabezados_tablas"><center>Linea 3"</center></th>
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
    <script src="../behavior/comportamiento_js.js" type="text/javascript"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</html>
