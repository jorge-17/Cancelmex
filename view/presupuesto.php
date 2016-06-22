<html>
    <head>
        <title>Presupuesto</title>
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
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="contenido_e" align="center">
            <div class="contenido_i">
              <form action="../cancelmex-bd/manejadorBD.php?action=registrar_presupuesto" method="post">
            <table class="table">
                <tr>
                    <td><input placeholder="Nombre del cliente" name="nombre_c" type="text" class="form-control" required></td>
                    <td><input type="text" placeholder="Domicilio" name="domicilio_c" class="form-control" required></td>
                </tr>
                <tr>
                    <td><select name="producto" class="form-control" required>
                                <?php
                            error_reporting(E_ALL ^ E_NOTICE);
      $con=mysqli_connect("localhost","root","","calcelmex");
                // Check connection
                if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result = mysqli_query($con,"SELECT * FROM modulos");
                 while($row = mysqli_fetch_array($result)) {
                      ?>
                      <option><?php echo $row['clave']." - ".$row['descripcion'];?></option>
                      <?php
                      }
                        mysqli_close($con);
                        ?>
                                </select></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ancho: <input type="text" name="ancho_p" placeholder="ancho m" class="form-control" required></td>
                    <td>Alto: <input type="text" name="alto_p" placeholder="alto m" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Color: <input  type="text" name="color_p" placeholder="color" class="form-control" required></td>
                    <td>Cantidad: <input type="number" name="cantidad_p" placeholder="cantidad" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Cristal  Tono: <input type="text" name="tono_c" placeholder="tono" class="form-control" required>
                        <td>Espesor: <input type="text" name="espesor_c" placeholder="espesor" class="form-control" required></td>
                </tr>

                <tr>
                    <td>Extra: <input type="text" name="extra_pre" placeholder="extra $" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Utilidad: <input type="text" name="utilidad_pre" placeholder="utilidad %" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Precio Total:<div>$$$</div></td>
                </tr>

            </table>
        </form>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</html>
