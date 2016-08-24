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
                    <tr>
                       <form action="ventana_sencilla_cuadriculada.php?action=calcular17266271" method="post">
                     <th><table class="table">
                          <tr><th><center>Medidas</center></th></tr>
                          <tr><td><input class="form-control" name="alto_pta_v" placeholder="Alto"></td></tr>
                          <tr><td><input class="form-control" name="ancho_pta_v" placeholder="Ancho"></td></tr>
                      </table></th>
                      <th><table class="table">
                         <tr><th><center>Intermedios</center></th></tr>
                          <tr><td><input class="form-control" name="num_alto" placeholder="Verticales"></td></tr>
                          <tr><td><input class="form-control" name="num_ancho" placeholder="Horizontales"></td></tr>
                      </table></th>
                       <th>
                           <table class="table">
                               <tr><td><input class="form-control" name="utilidad" value=".7" placeholder="70%"></td></tr>
                               <tr><td><select name="tipo_puerta" class="form-control">
                                   <option value="intermedio_c_2">Ventana de 2"</option>
                                   <option value="intermedio_c_3">Ventana de 3"</option>
                               </select></td></tr>
                           </table>
                       </th>
                        <th><button type="submit" class="btn btn-primary">Calcular</button></th>
                        </form>
                    </tr>
                </table>
                <?php
                        $action=$_GET['action'];

                        switch($action){
                            case "calcular17266271":
                                $alto=$_POST["alto_pta_v"];
                                $ancho=$_POST["ancho_pta_v"];
                                $can_alto=$_POST["num_alto"];
                                $can_ancho=$_POST["num_ancho"];
                                $tipo=$_POST["tipo_puerta"];
                                $dolar=$_POST["v_dolar"];
                                $utilidad=$_POST["utilidad"];
                        ?>
                        <table>
                            <tr>
                                <td><?php echo $alto."-".$ancho; ?></td>
                            </tr>
                        </table>
                <table class="table">
                    <tr>
                        <td>
                        </td>
                        <td>
                               <table class="table" id="tabla_l2">
                                <tr>
                                    <th colspan="2" class="encabezados_tablas"><center><button class="btn btn-defaul" id="boton_menu_l2" onclick="mostrarDisplay_ventana2('tabla_l2','boton_menu_l2')"><span class="glyphicon glyphicon-menu-hamburger"></span></button>Ventana Cuadriculada</center></th>
                                </tr>
                                <tr style="display:none">
                                    <td>Intermedio</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='".$tipo."'");
                                    $c=$result->fetch_assoc();
                                    $m=$c['precio'];
                                    $zz=(($ancho*$can_ancho)+($alto*$can_alto));
                                    if($zz<=6){
                                        $costo_intermedio_l3=$m;
                                    }elseif($zz>6&&$zz<=9){
                                        $costo_intermedio_l3=($m*1.5);
                                    }else{
                                        $costo_intermedio_l3=($m*2);
                                    }
                                    ?>
                                    <td><div><?php echo round($costo_intermedio_l3,2); ?></div></td>
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
                                    $costo_vinil_l3=((($ancho*2)+($alto*2))*$m)*3;
                                    ?>
                                    <td><div id="vinil_l3"><?php echo round($costo_vinil_l3,2); ?></div></td>
                                </tr>
                                <tr style="display:none">
                                    <td>Suma total</td>
                                    <?php
                                    $suma_total_l2=$costo_tornillos_l3+$costo_vinil_l3+$costo_intermedio_l3;
                                    ?>
                                    <td><div id="suma_total_l2"><?php echo round($suma_total_l2,2); ?></div></td>
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
                                    <td><div class="precios" id="costo_total2_l2"><?php echo round($costo_claro_l2,2)."*"; ?></div></td>s
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
                                    <td><div class="precios" id="costo_total2_l2"><?php echo round($costo_chino_l2,2)."*"; ?></div></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Filtrasol</td>
                                    <?php
                                    $result=mysqli_query($con,"SELECT price AS precio FROM materials WHERE nombre='filtrasol'");
                                    $c=$result->fetch_assoc();
                                    $d=$c['precio'];
                                    $costo_filtrasol_l2_v=($ancho*$alto)*$d;
                                    $s=$suma_total_l2+$costo_filtrasol_l2_v;
                                    $costo_filtrasol_l2=($s*$utilidad)+$s;
                                    ?>
                                    <td><div><?php echo round($costo_filtrasol_l2_v,2); ?></div></td>
                                </tr>
                                   <tr>
                                    <td><div class="precios" id="costo_total2_l2"><?php echo round($costo_filtrasol_l2,2)."*"; ?></div></td>
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
                                    <td><div class="precios" id="costo_total2_l2"><?php echo round($costo_tintex_l2,2)."*"; ?></div></td>
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
                                    <td><div class="precios" id="costo_total2_l2"><?php echo round($costo_satinado_l2,2)."*"; ?></div></td>
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
                                    <td><div class="precios" id="costo_total2_l2"><?php echo round($costo_reflecta_l2,2)."*"; ?></div></td>
                                </tr>
                                <tr>
                                    <th colspan="2">* En caso de ser doble corrediza</th>
                                </tr>
                            </table>
                        </td>
                        <td>
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
