<html>
    <head>
        <title>Ingresar materiales</title>
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
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
                            <li>
                                <a href="pta_toda_vidrio.php">Puerta de Vidrio</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Ventanas con antepecho <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="ventana_c_antepecho.php">Ventana con antepecho</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="ingresar_materiales.php">Registrar materiales</a>
                    </li>
                </ul>
            </div>
        </nav>
       <form action="../cancelmex-bd/manejadorBD.php?action=insert_material" method="post">
           <table class="table">
               <tr>
                   <td><input type="text" name="nombre_material" class="form-control" placeholder="NAME"></td>
                   <td><input type="text" name="precio_material" class="form-control" placeholder="PRICE"></td>
               </tr>
               <tr>
                   <td colspan="5"><center><button type="submit" class="btn btn-primary">Ingresar</button></center></td>
               </tr>
           </table>
       </form>
    </body>
    <script type="text/javascript" src="../behavior/comportamiento_js.js"></script>
    <script type="text/javascript" src="../behavior/jquery.min.js"></script>
    <script type="text/javascript" src="../style/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</html>
