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
               <div class="dolares">
       <!-- FXEXCHANGERATE.COM EXCHANGE RATE CONVERTER START --><div style="width:196px;border:1px solid #2D6AB4;background-color:#F0F0F0;"><div style="text-align:left;background-color:#2D6AB4;border-bottom:0px;height:18px; font-size:12px;font-weight:bold;padding-top:2px; padding-left:5px"><span  style="background-image:url(http://ww.fxexchangerate.com/flag.png); background-position: 0 -2064px; width:100%; height:15px; background-repeat:no-repeat;padding-left:2px;"><a href="http://usd.fxexchangerate.com/" target="_blank" style="color:#FFFFFF; text-decoration:none;padding-left:22px;">Dólar estadounidense</a></span></div><script type="text/javascript">var fm="USD";var ft="MXN,";var hb="2D6AB4";var hc="FFFFFF";var bb = "F0F0F0";var bo = "2D6AB4";var tz="-6s";var wh="196x80";var lg="es";</script><script type="text/javascript" src="http://www.fxexchangerate.com/converter.php"></script></div><!-- FXEXCHANGERATE.COM  EXCHANGE RATE CONVERTER END -->
       <br>
       <input type="text" id="dolar" placeholder="Dolar">
        </div>
                <table class="table">
            <tr class="titulo_grupo">
                <th>Clave</th>
                <th>Descripcion</th>
                <th>Medida</th>
                <th></th>
                <th>Sin Anodizar</th>
                <th>Natural</th>
                <th>Anodizados Negro</th>
                <th>Electro 200</th>
                <th>Blanco</th>
                <th>Lacados Hueso</th>
                <th>Madera</th>
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
                <td><input type="text" class="form-control" placeholder="Medida" id="alu1_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu1_1_m<?php echo $row['id']; ?>','alu1_1_<?php echo $row['id'];?>','alu1_2_<?php echo $row['id'];?>','alu1_3_<?php echo $row['id'];?>'
                ,'alu1_4_<?php echo $row['id'];?>','alu1_5_<?php echo $row['id'];?>','alu1_6_<?php echo $row['id'];?>'
                ,'alu1_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu1_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu1_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu1_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu1_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu1_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu1_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu1_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu2_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu2_1_m<?php echo $row['id']; ?>','alu2_1_<?php echo $row['id'];?>','alu2_2_<?php echo $row['id'];?>','alu2_3_<?php echo $row['id'];?>'
                ,'alu2_4_<?php echo $row['id'];?>','alu2_5_<?php echo $row['id'];?>','alu2_6_<?php echo $row['id'];?>'
                ,'alu2_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu2_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu2_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu2_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu2_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu2_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu2_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu2_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu3_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu3_1_m<?php echo $row['id']; ?>','alu3_1_<?php echo $row['id'];?>','alu3_2_<?php echo $row['id'];?>','alu3_3_<?php echo $row['id'];?>','alu3_4_<?php echo $row['id'];?>','alu3_5_<?php echo $row['id'];?>','alu3_6_<?php echo $row['id'];?>'
                ,'alu3_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu3_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu3_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu3_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu3_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu3_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu3_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu3_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu4_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu4_1_m<?php echo $row['id']; ?>','alu4_1_<?php echo $row['id'];?>','alu4_2_<?php echo $row['id'];?>','alu4_3_<?php echo $row['id'];?>','alu4_4_<?php echo $row['id'];?>','alu4_5_<?php echo $row['id'];?>','alu4_6_<?php echo $row['id'];?>'
                ,'alu4_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu4_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu4_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu4_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu4_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu4_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu4_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu4_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu5_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu5_1_m<?php echo $row['id']; ?>','alu5_1_<?php echo $row['id'];?>','alu5_2_<?php echo $row['id'];?>','alu5_3_<?php echo $row['id'];?>','alu5_4_<?php echo $row['id'];?>','alu5_5_<?php echo $row['id'];?>','alu5_6_<?php echo $row['id'];?>'
                ,'alu5_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu5_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu5_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu5_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu5_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu5_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu5_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu5_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu6_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu6_1_m<?php echo $row['id']; ?>','alu6_1_<?php echo $row['id'];?>','alu6_2_<?php echo $row['id'];?>','alu6_3_<?php echo $row['id'];?>','alu6_4_<?php echo $row['id'];?>','alu6_5_<?php echo $row['id'];?>','alu6_6_<?php echo $row['id'];?>'
                ,'alu6_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu6_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu6_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu6_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu6_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu6_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu6_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu6_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu7_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu7_1_m<?php echo $row['id']; ?>','alu7_1_<?php echo $row['id'];?>','alu7_2_<?php echo $row['id'];?>','alu7_3_<?php echo $row['id'];?>','alu7_4_<?php echo $row['id'];?>','alu7_5_<?php echo $row['id'];?>','alu7_6_<?php echo $row['id'];?>'
                ,'alu7_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu7_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu7_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu7_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu7_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu7_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu7_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu7_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu8_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu8_1_m<?php echo $row['id']; ?>','alu8_1_<?php echo $row['id'];?>','alu8_2_<?php echo $row['id'];?>','alu8_3_<?php echo $row['id'];?>','alu8_4_<?php echo $row['id'];?>','alu8_5_<?php echo $row['id'];?>','alu8_6_<?php echo $row['id'];?>'
                ,'alu8_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu8_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu8_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu8_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu8_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu8_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu8_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu8_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu9_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu9_1_m<?php echo $row['id']; ?>','alu9_1_<?php echo $row['id'];?>','alu9_2_<?php echo $row['id'];?>','alu9_3_<?php echo $row['id'];?>','alu9_4_<?php echo $row['id'];?>','alu9_5_<?php echo $row['id'];?>','alu9_6_<?php echo $row['id'];?>'
                ,'alu9_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu9_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu9_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu9_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu9_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu9_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu9_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu9_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu10_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu10_1_m<?php echo $row['id']; ?>','alu10_1_<?php echo $row['id'];?>','alu10_2_<?php echo $row['id'];?>','alu10_3_<?php echo $row['id'];?>','alu10_4_<?php echo $row['id'];?>','alu10_5_<?php echo $row['id'];?>','alu10_6_<?php echo $row['id'];?>'
                ,'alu10_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu10_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu10_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu10_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu10_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu10_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu10_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu10_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu11_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu11_1_m<?php echo $row['id']; ?>','alu11_1_<?php echo $row['id'];?>','alu11_2_<?php echo $row['id'];?>',
                'alu11_3_<?php echo $row['id'];?>','alu11_4_<?php echo $row['id'];?>','alu11_5_<?php echo $row['id'];?>',
                'alu11_6_<?php echo $row['id'];?>','alu11_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu11_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu11_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu11_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu11_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu11_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu11_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu11_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu12_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu12_1_m<?php echo $row['id']; ?>','alu12_1_<?php echo $row['id'];?>','alu12_2_<?php echo $row['id'];?>',
                'alu12_3_<?php echo $row['id'];?>','alu12_4_<?php echo $row['id'];?>','alu12_5_<?php echo $row['id'];?>',
                'alu12_6_<?php echo $row['id'];?>','alu12_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu12_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu12_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu12_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu12_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu12_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu12_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu12_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu13_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu13_1_m<?php echo $row['id']; ?>','alu13_1_<?php echo $row['id'];?>','alu13_2_<?php echo $row['id'];?>',
                'alu13_3_<?php echo $row['id'];?>','alu13_4_<?php echo $row['id'];?>','alu13_5_<?php echo $row['id'];?>',
                'alu13_6_<?php echo $row['id'];?>','alu13_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu13_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu13_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu13_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu13_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu13_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu13_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu13_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu14_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu14_1_m<?php echo $row['id']; ?>','alu14_1_<?php echo $row['id'];?>','alu14_2_<?php echo $row['id'];?>',
                'alu14_3_<?php echo $row['id'];?>','alu14_4_<?php echo $row['id'];?>','alu14_5_<?php echo $row['id'];?>',
                'alu14_6_<?php echo $row['id'];?>','alu14_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu14_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu14_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu14_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu14_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu14_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu14_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu14_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu15_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu15_1_m<?php echo $row['id']; ?>','alu15_1_<?php echo $row['id'];?>','alu15_2_<?php echo $row['id'];?>',
                'alu15_3_<?php echo $row['id'];?>','alu15_4_<?php echo $row['id'];?>','alu15_5_<?php echo $row['id'];?>',
                'alu15_6_<?php echo $row['id'];?>','alu15_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu15_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu15_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu15_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu15_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu15_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu15_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu15_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu16_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu16_1_m<?php echo $row['id']; ?>','alu16_1_<?php echo $row['id'];?>','alu16_2_<?php echo $row['id'];?>',
                'alu16_3_<?php echo $row['id'];?>','alu16_4_<?php echo $row['id'];?>','alu16_5_<?php echo $row['id'];?>',
                'alu16_6_<?php echo $row['id'];?>','alu16_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu16_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu16_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu16_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu16_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu16_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu16_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu16_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu17_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu17_1_m<?php echo $row['id']; ?>','alu17_1_<?php echo $row['id'];?>','alu17_2_<?php echo $row['id'];?>',
                'alu17_3_<?php echo $row['id'];?>','alu17_4_<?php echo $row['id'];?>','alu17_5_<?php echo $row['id'];?>',
                'alu17_6_<?php echo $row['id'];?>','alu17_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu17_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu17_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu17_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu17_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu17_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu17_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu17_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu18_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu18_1_m<?php echo $row['id']; ?>','alu18_1_<?php echo $row['id'];?>','alu18_2_<?php echo $row['id'];?>',
                'alu18_3_<?php echo $row['id'];?>','alu18_4_<?php echo $row['id'];?>','alu18_5_<?php echo $row['id'];?>',
                'alu18_6_<?php echo $row['id'];?>','alu18_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu18_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu18_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu18_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu18_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu18_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu18_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu18_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu19_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu19_1_m<?php echo $row['id']; ?>','alu19_1_<?php echo $row['id'];?>','alu19_2_<?php echo $row['id'];?>',
                'alu19_3_<?php echo $row['id'];?>','alu19_4_<?php echo $row['id'];?>','alu19_5_<?php echo $row['id'];?>',
                'alu19_6_<?php echo $row['id'];?>','alu19_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu19_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu19_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu19_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu19_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu19_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu19_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu19_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu20_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu20_1_m<?php echo $row['id']; ?>','alu20_1_<?php echo $row['id'];?>','alu20_2_<?php echo $row['id'];?>',
                'alu20_3_<?php echo $row['id'];?>','alu20_4_<?php echo $row['id'];?>','alu20_5_<?php echo $row['id'];?>',
                'alu20_6_<?php echo $row['id'];?>','alu20_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu20_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu20_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu20_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu20_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu20_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu20_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu20_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu21_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu21_1_m<?php echo $row['id']; ?>','alu21_1_<?php echo $row['id'];?>','alu21_2_<?php echo $row['id'];?>',
                'alu21_3_<?php echo $row['id'];?>','alu21_4_<?php echo $row['id'];?>','alu21_5_<?php echo $row['id'];?>',
                'alu21_6_<?php echo $row['id'];?>','alu21_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu21_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu21_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu21_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu21_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu21_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu21_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu21_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu22_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu22_1_m<?php echo $row['id']; ?>','alu22_1_<?php echo $row['id'];?>','alu22_2_<?php echo $row['id'];?>',
                'alu22_3_<?php echo $row['id'];?>','alu22_4_<?php echo $row['id'];?>','alu22_5_<?php echo $row['id'];?>',
                'alu22_6_<?php echo $row['id'];?>','alu22_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu22_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu22_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu22_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu22_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu22_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu22_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu22_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu23_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu23_1_m<?php echo $row['id']; ?>','alu23_1_<?php echo $row['id'];?>','alu23_2_<?php echo $row['id'];?>',
                'alu23_3_<?php echo $row['id'];?>','alu23_4_<?php echo $row['id'];?>','alu23_5_<?php echo $row['id'];?>',
                'alu23_6_<?php echo $row['id'];?>','alu23_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu23_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu23_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu23_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu23_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu23_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu23_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu23_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu24_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu24_1_m<?php echo $row['id']; ?>','alu24_1_<?php echo $row['id'];?>','alu24_2_<?php echo $row['id'];?>',
                'alu24_3_<?php echo $row['id'];?>','alu24_4_<?php echo $row['id'];?>','alu24_5_<?php echo $row['id'];?>',
                'alu24_6_<?php echo $row['id'];?>','alu24_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu24_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu24_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu24_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu24_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu24_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu24_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu24_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu25_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu25_1_m<?php echo $row['id']; ?>','alu25_1_<?php echo $row['id'];?>','alu25_2_<?php echo $row['id'];?>',
                'alu25_3_<?php echo $row['id'];?>','alu25_4_<?php echo $row['id'];?>','alu25_5_<?php echo $row['id'];?>',
                'alu25_6_<?php echo $row['id'];?>','alu25_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu25_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu25_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu25_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu25_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu25_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu25_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu25_7_<?php echo $row['id'];?>'>-</div></td>
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
                <td><input class="form-control" type="text" placeholder="Medida" id="alu26_1_m<?php echo $row['id']; ?>"></td>
                <td><button class="btn btn-default" onclick="calcular('<?php echo $m_1;?>','<?php echo $s_ano;?>','<?php echo $natural;?>',
                '<?php echo $ano_n;?>','<?php echo $electro;?>','<?php echo $blanco;?>','<?php echo $lac_h;?>','<?php echo $madera;?>',
                'alu26_1_m<?php echo $row['id']; ?>','alu26_1_<?php echo $row['id'];?>','alu26_2_<?php echo $row['id'];?>',
                'alu26_3_<?php echo $row['id'];?>','alu26_4_<?php echo $row['id'];?>','alu26_5_<?php echo $row['id'];?>',
                'alu26_6_<?php echo $row['id'];?>','alu26_7_<?php echo $row['id'];?>')"><img src="../style/imagenes/calc.ico"></button></td>
                <td><div id='alu26_1_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu26_2_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu26_3_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu26_4_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu26_5_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu26_6_<?php echo $row['id'];?>'>-</div></td>
                <td><div id='alu26_7_<?php echo $row['id'];?>'>-</div></td>
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
