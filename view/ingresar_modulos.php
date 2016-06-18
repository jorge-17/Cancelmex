<html>
    <head>
        <title>Registrar modulos</title>
        <link type="text/css" rel="stylesheet" href="../style/estilos.css">
    </head>
    <body>
        <form action="../cancelmex-bd/manejadorBD.php?action=insert_modulo" method="post">
            <table>
                <tr>
                    <th>Clave</th>
                    <td><input type="text" placeholder="clave" name="clave"></td>
                </tr>
                <tr>
                    <th>Descripcion</th>
                    <td><input type="text" placeholder="descripcion" name="descripcion"></td>
                </tr>
                <tr>
                    <th colspan="2"><button type="submit">Ingresar</button></th>
                </tr>
            </table>
        </form>

        <table class="tabla_modulos">
            <tr>
                <th>Clave</th>
                <th>Descripcion</th>
            </tr>
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
            <tr>
                <td><?php echo $row['clave'];?></td>
                <td><?php echo $row['descripcion'];?></td>
            </tr>

            <?php
                     }
                     ?>
        </table>
    </body>
</html>
