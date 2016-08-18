<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
$valor_id=$_POST["precio_id"];
?>
<html>
    <head>
        <title>Modificar precios</title>
        <link rel="stylesheet" type="text/css" href="../style/estilos.css">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
    </head>
    <body>
       <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Cancelmex</a>
                <ul class="nav navbar-nav" id="navegador">
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
            <div class="contenido_i_lista">
            <table class="table">
                <tr>
                    <th>Clave</th>
                    <th>Descripcion</th>
                    <th>Medida</th>
                    <th>Sin Anodizar</th>
                    <th>Natural</th>
                    <th>Anodizados Negro</th>
                    <th>Electro 200</th>
                    <th>Blanco</th>
                    <th>Lacados Hueso</th>
                    <th>Madera</th>
                </tr>
                <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE id='$valor_id'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
            <form action="../cancelmex-bd/manejadorBD.php?action=Update_precio17266271" method="post">
            <tr>
               <?php
                     $m_1=$row['medida'];
                     $s_ano=$row['s_anodizar'];
                     $natural=$row['c_natural'];
                     $ano_n=$row['ano_negro'];
                     $electro=$row['electro'];
                     $blanco=$row['blanco'];
                     $lac_h=$row['lac_hueso'];
                     $madera=$row['madera'];
                     ?>
                <td><?php echo $row['id']; ?><input type="hidden" value="<?php echo $row['id']; ?>" name="value_id"></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><input value="<?php echo $m_1;?>" name="medida" class="form-control"></td>
                <td><input value="<?php echo $s_ano;?>" name="sin_anodizar" class="form-control"></td>
                <td><input value="<?php echo $natural;?>" name="natural_1" class="form-control"></td>
                <td><input value="<?php echo $ano_n;?>" name="anodizado_n" class="form-control"></td>
                <td><input value="<?php echo $electro;?>" name="electro" class="form-control"></td>
                <td><input value="<?php echo $blanco;?>" name="blanco" class="form-control"></td>
                <td><input value="<?php echo $lac_h;?>" name="lacado" class="form-control"></td>
                <td><input value="<?php echo $madera;?>" name="madera" class="form-control"></td>
                </tr>
                <?php
                     }
                ?>
                <tr>
                    <td colspan="10"><center><button type="submit" class="btn btn-primary">Modificar</button></center></td>
                </tr>
                </form>
            </table>
        </div>
        </div>
    </body>
    <script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</html>
