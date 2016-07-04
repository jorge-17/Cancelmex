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
               <form action="fijos.php?action=calcular1726" method="post">
                <th><input class="form-control" type="text" name="ancho_F" placeholder="Ancho"></th>
                <th><input class="form-control" type="text" name="alto_F" placeholder="Alto"></th>
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
                ?>
               <td>
                   <table class="table">
                       <tr>
                           <th colspan="2" class="encabezados_tablas"><center>Linea 2"</center></th>
                       </tr>
                       <tr>
                           <td>Bolsa superior</td>
                           <?php
                            $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='bolsa 2\"'");
                            $c=$result->fetch_assoc();
                            $d=$c['precio'];
                            $m=($d/6.10)*
                            $costo_bolsas_l2=$ancho*$p_bolsa_l2;
                           ?>
                           <td><div id="bs_2"><?php echo $costo_bolsas_l2; ?></div></td>
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
