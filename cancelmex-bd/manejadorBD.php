<?php
$con=mysqli_connect("localhost","root","","calcelmex");
$action=$_GET['action'];

switch($action){
    case "insert_modulo":
        mysqli_query($con,"INSERT INTO `modulos`(`clave`, `descripcion`) VALUES ('{$_POST["clave"]}','{$_POST["descripcion"]}')");
        ?>
        <script>alert("Modulo registrado clave=<?php echo $_POST["clave"]?> descripcion=<?php echo $_POST["descripcion"]?>")</script>
        <?php
            echo "<script>window.location='../view/ingresar_modulos.php'</script>";
        break;
}
?>
