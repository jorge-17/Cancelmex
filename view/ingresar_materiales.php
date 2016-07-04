<html>
    <head>
        <title>Ingresar materiales</title>
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap-3.3.6-dist/css/bootstrap.css">
    </head>
    <body>
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
