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
    case "insert_material":
        mysqli_query($con,"INSERT INTO `materials`(`nombre`,`price`) VALUES ('{$_POST["nombre_material"]}','{$_POST["precio_material"]}')");
        echo "<script>window.location='../view/ingresar_materiales.php'</script>";
        break;
    case "update_price26171726":
        mysqli_query($con,"UPDATE `materials` SET `price`={$_POST["nuevo_precio"]} WHERE nombre='{$_POST["nombre"]}'");
        ?>
        <script>alert("Precio modificado")</script>
        <script>window.location='../view/ingresar_materiales.php'</script>
        <?php
        break;
    case "insert_lista":
        mysqli_query($con,"INSERT INTO `lista_precios`(`id`, `nombre`, `medida`, `s_anodizar`, `c_natural`, `ano_negro`, `electro`, `blanco`, `lac_hueso`, `madera`) VALUES ('{$_POST["id"]}','{$_POST["nombre"]}',{$_POST["medida"]},{$_POST["s_ano"]},{$_POST["natural"]},
        {$_POST["ano_negro"]},{$_POST["electro"]},{$_POST["blanco"]},{$_POST["hueso"]},{$_POST["madera"]})");
        ?>
        <script>alert("Precio Registrado")</script>
        <script>window.location='../view/ingresar_precios.php'</script>
        <?php
        break;
    case "Update_precio17266271":
        mysqli_query($con,"UPDATE `lista_precios` SET `medida`={$_POST["medida"]},`s_anodizar`={$_POST["sin_anodizar"]},
        `c_natural`={$_POST["natural_1"]},`ano_negro`={$_POST["anodizado_n"]},`electro`={$_POST["electro"]},
        `blanco`={$_POST["blanco"]},`lac_hueso`={$_POST["lacado"]},`madera`={$_POST["madera"]} WHERE `id`='{$_POST["value_id"]}'");
            ?>
        <script>alert("Precio Modificado")</script>
        <script>window.location='../view/modificar_precio.php'</script>
        <?php
        break;
    case "Delete_precio17266271":
        mysqli_query($con,"DELETE FROM `lista_precios` WHERE id='{$_POST["precio_id"]}'");
        ?>
        <script>alert("Precio Eliminado")</script>
        <script>window.location='../view/lista_precios_consulta.php'</script>
        <?php
        break;
}
?>
