<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
?>
   <html>
    <head>
        <title>Ventana proyectable dos hojas</title>
        <link rel="stylesheet" type="text/css" href="../style/estilos.css">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
    </head>
    <body>
      <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Cancelmex</a>
                <ul class="nav navbar-nav">
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
                       <form action="vetana_proyectable_2.php?action=calcular123987" method="post">
                        <th><input type="text" name="alto_VP" placeholder="Alto" class="form-control"></th>
                        <th><input type="text" name="ancho_VP" placeholder="Ancho" class="form-control"></th>
                        <th><input class="form-control" name="utilidad" value=".7" placeholder="70%"></th>
                        <th><input class="form-control" type="text" name="v_dolar" placeholder="Dolar"></th>
                        <th><button type="submit" class="btn btn-primary">Calcular</button></th>
                        </form>
                        <td><!-- FXEXCHANGERATE.COM EXCHANGE RATE CONVERTER START --><div style="width:196px;border:1px solid #2D6AB4;background-color:#F0F0F0;"><div style="text-align:left;background-color:#2D6AB4;border-bottom:0px;height:18px; font-size:12px;font-weight:bold;padding-top:2px; padding-left:5px"><span  style="background-image:url(http://ww.fxexchangerate.com/flag.png); background-position: 0 -2064px; width:100%; height:15px; background-repeat:no-repeat;padding-left:2px;"><a href="http://usd.fxexchangerate.com/" target="_blank" style="color:#FFFFFF; text-decoration:none;padding-left:22px;">Dólar estadounidense</a></span></div><script type="text/javascript">var fm="USD";var ft="MXN,";var hb="2D6AB4";var hc="FFFFFF";var bb = "F0F0F0";var bo = "2D6AB4";var tz="-6s";var wh="196x80";var lg="es";</script><script type="text/javascript" src="http://www.fxexchangerate.com/converter.php"></script></div><!-- FXEXCHANGERATE.COM  EXCHANGE RATE CONVERTER END -->
                       </td>
                    </tr>
                </table>
                <?php
                        $action=$_GET['action'];

                        switch($action){
                            case "calcular123987":
                                $alto=$_POST["alto_VP"];
                                $ancho=$_POST["ancho_VP"];
                                $dolar=$_POST["v_dolar"];
                                $utilidad=$_POST["utilidad"];
                        ?>
                <table>
                    <tr>
                        <th>Alto: <?php echo $alto; ?></th>
                        <th>Ancho: <?php echo $ancho; ?></th>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td>
                            <table class="table" id="tabla_1">
                                <tr>
                                    <th colspan="4" class="encabezados_tablas"><center><button class="btn btn-default" id="boton_menu_l1" onclick="mostratDisplay_ventanap_sencilla('tabla_1','boton_menu_l1')"><span class="glyphicon glyphicon-menu-hamburger"></span></button>Una hoja</center></th>
                                </tr>
                                <tr style="display:none">
                                    <td>Marco</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='marco_vp'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00);
                                    $costo_marco_l1=(($ancho*2)+($alto*2))*$m;
                                    ?>
                                    <td colspan="3"><div id="jamba_l1-"><?php echo round($costo_marco_l1,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Contramarco</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='contramarco_vp'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $m=($d/6.00);
                                    $costo_contramarco_l1=(($ancho*2)+($alto*3))*$m;
                                    ?>
                                    <td colspan="3"><div id="jambas_l1-"><?php echo round($costo_contramarco_l1,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Operador cadena</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='operador_cadena'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_operador_l1=$d;
                                    ?>
                                    <td colspan="3"><div id="riel_l1-"><?php echo round($costo_operador_l1,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Juego de bisagras</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='bisagra_jgo'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_bisagras_l1=$d;
                                    ?>
                                    <td colspan="3"><div id="ctraslape_l1-"><?php echo round($costo_bisagras_l1,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Silicon</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='silicon'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_silicon_l1=(($alto*2)+($ancho*2))*$d;
                                    ?>
                                    <td colspan="3"><div id="silicon_l1-"><?php echo round($costo_silicon_l1,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Acrilastic</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='acrilastic'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_acrilastic_l1=(($alto*2)+($ancho*2))*$d;
                                    ?>
                                    <td colspan="3"><div id="acrilastica_l1-"><?php echo round($costo_acrilastic_l1,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Vinil</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='vinil'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $b=$ancho/2;
                                    $costo_vinil_l1=((($b*4)+($alto*4)))*$d;
                                    ?>
                                    <td colspan="3"><div id="vinil_l1-"><?php echo round($costo_vinil_l1,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Suma total</td>
                                    <?php
                                    $suma_total_l1=$costo_marco_l1+$costo_contramarco_l1+$costo_operador_l1+$costo_bisagras_l1
                                        +$costo_silicon_l1+$costo_acrilastic_l1+$costo_vinil_l1;
                                    ?>
                                    <td colspan="3"><div id="suma_total_l1"><?php echo round($suma_total_l1,2); ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Satinado</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='satinado'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_satinado_l1=($ancho*$alto)*$d;
                                    $a=$costo_satinado_l1+$suma_total_l1;
                                    $costo_total_satinado_l1=($a*$utilidad)+$a;
                                    ?>
                                    <td><div><?php echo round($costo_satinado_l1,2); ?></div></td><td><table class="mini_tablas"><tr><td>Operador cadena</td>
                                    <td>Mariposa</td></tr></table></td>
                                </tr>
                                   <tr>
                                    <td><div class="precios" id="satinadol1"><?php echo round($costo_total_satinado_l1,2); ?></div></td>
                                    <td>
                                        <table class="mini_tablas">
                                            <tr>
                                               <?php
                                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='satinado'");
                                                $c=$result->fetch_assoc();
                                                $d=$c['precio'];
                                                $costo_satinado_l1=($ancho*$alto)*$d;
                                                $a=$costo_satinado_l1+$suma_total_l1+$costo_operador_l1;
                                                $costo_total_satinado_l1_1=($a*$utilidad)+$a;
                                                ?>
                                                <td><div class="precios" id="satinadol1"><?php echo round($costo_total_satinado_l1_1,2); ?></div></td>
                                                <?php
                                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='satinado'");
                                                $c=$result->fetch_assoc();
                                                $d=$c['precio'];
                                                $costo_satinado_l1=($ancho*$alto)*$d;
                                                $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='mariposa_vp'");
                                                $c=$result->fetch_assoc();
                                                $mariposa=$c['precio'];
                                                $a=$costo_satinado_l1+$suma_total_l1+$mariposa;
                                                $costo_total_satinado_l1_2=($a*$utilidad)+$a;
                                                ?>
                                                <td><div class="precios" id="satinadol1"><?php echo round($costo_total_satinado_l1_2,2); ?></div></td>
                                            </tr>
                                        </table>
                                    </td>
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
