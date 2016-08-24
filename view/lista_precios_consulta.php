<?php
error_reporting(E_ALL ^ E_NOTICE);
$con=mysqli_connect("localhost","root","","calcelmex");
?>
   <html>
    <head>
        <title>Lista de Precios Aluminio</title>
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

            <div class="contenido_i_lista">

                <table class="table">
            <tr class="titulo_grupo">
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
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td class="titulo_grupo">Bolsa 1.5"</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Bolsa 1.5'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>

            <tr>
                <td></td>
                <td class="titulo_grupo">Bolsa 2"</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Bolsa 2'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>

            <tr>
                <td></td>
                <td class="titulo_grupo">Bolsa 3"</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Bolsa 3'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Corrediza 1.5"</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Corrediza 1.5'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Corrediza 2"</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Corrediza 2'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Corrediza 3"</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Corrediza 3'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Baños</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Banos'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Batientes</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Batientes'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Puerta 1 3/4"</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Puerta 1 3/4'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Serie Sifon</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Serie Sifon'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Serie Proyeccion</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Serie Proyeccion'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Porta Vidrios</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Porta Vidrios'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Angulos y Tees</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Angulos y Tees'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Duelas</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Duelas'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Mosquiteros</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Mosquiteros'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Molduras</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Molduras'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Pasamanos</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Pasamanos'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Louver y Repizones</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Louver y Repizones'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Celosias</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Celosias'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Tubos Cuadrados</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Tubos Cuadrados'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Tubos Rectangulares</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Tubos Rectangulares'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Zoclo Herculite</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Zoclo Herculite'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Fachadas</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Fachadas'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Canales para Domo</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Canales Domo'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Vitrinas</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Vitrinas'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
                     }
                     ?>
            <tr>
                <td></td>
                <td class="titulo_grupo">Celosias</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM `lista_precios` WHERE grupo='Celosias 2'");
                 while($row = mysqli_fetch_array($result)) {
            ?>
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
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><div><?php echo $m_1;?></div></td>
                <td><div><?php echo $s_ano;?></div></td>
                <td><div><?php echo $natural;?></div></td>
                <td><div><?php echo $ano_n;?></div></td>
                <td><div><?php echo $electro;?></div></td>
                <td><div><?php echo $blanco;?></div></td>
                <td><div><?php echo $lac_h;?></div></td>
                <td><div><?php echo $madera;?></div></td>
                <td><form action="modificar_precio.php" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
                </form></td>
                <td><form action="../cancelmex-bd/manejadorBD.php?action=Delete_precio17266271" method="post">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="precio_id">
                    <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                </form></td>
            </tr>
            <?php
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
