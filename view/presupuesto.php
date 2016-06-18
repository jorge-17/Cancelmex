<html>
    <head>
        <title>Presupuesto</title>
    </head>
    <body>
        <form action="../cancelmex-bd/manejadorBD.php?action=registrar_presupuesto" method="post">
            <table>
                <tr>
                    <td><input placeholder="Nombre del cliente" name="nombre_c" type="text"></td>
                    <td><input type="text" placeholder="Domicilio" name="domicilio_c"></td>
                </tr>
                <tr>
                    <td><select name="producto" required>
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
                    <td>Ancho: <input type="text" name="ancho_p" placeholder="ancho m"></td>
                    <td>Alto: <input type="text" name="alto_p" placeholder="alto m"></td>
                </tr>
                <tr>
                    <td>Color: <input  type="text" name="color_p" placeholder="color"></td>
                    <td>Cantidad: <input type="number" name="cantidad_p" placeholder="cantidad"></td>
                </tr>
                <tr>
                    <td>Cristal  Tono: <input type="text" name="tono_c" placeholder="tono">
                        <td>Espesor: <input type="text" name="espesor_c" placeholder="espesor"></td>
                </tr>

                <tr>
                    <td>Extra: <input type="text" name="extra_pre" placeholder="extra $"></td>
                    </tr>
                    <tr>
                        <td>Utilidad: <input type="text" name="utilidad_pre" placeholder="utilidad %"></td>
                </tr>
                <tr>
                    <td>Precio Total:<div>$$$</div></td>
                </tr>

            </table>
        </form>
    </body>
</html>
