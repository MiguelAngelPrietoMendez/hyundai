<?php
session_start();
if (isset($_SESSION['nombre_usuario']) && isset($_SESSION['id_usuario'])) {
include '../../models/access_db.php'; //incluimos el acceso a la base de datos

if (isset($_SESSION['id_plantilla'])) 
{
    unset($_SESSION["id_plantilla"]);
}
?>
<html>
    <head>



    </head>
    <body>
        <div id="contenedorPrincipal">
            
            <?php
            $resultPlantillaActual = $mysqli->query("SELECT * FROM tbl_plantillas WHERE id_plantillas=1");
            $rowPlantillaActual = $resultPlantillaActual->fetch_array();
            ?>
            <form action="../index.php" method="POST">
                EDITAR PLANTILLA ACTUAL <?php echo "<strong>".$rowPlantillaActual["nombre_plantillas"]."</strong>" ;?>
                <input type="hidden" name="plantillaActual" value="1" />
                <input type="submit" value="EDITAR" />
                
            </form>
            <br>
            
            <?php
            $resultPlantillaCreada = $mysqli->query("SELECT * FROM tbl_plantillas WHERE id_plantillas=2");
            $rowPlantillaCreada = $resultPlantillaCreada->num_rows;
            $rowPlantilla = $resultPlantillaCreada->fetch_array();
            if ($rowPlantillaCreada > 0) 
            {
                ?>
                <form action="../index.php" method="POST">
                    SEGUIR EDITANDO LA NUEVA PLANTILLA <?php echo "<strong>".$rowPlantilla["nombre_plantillas"]."</strong>" ;?>
                    <input type="hidden" name="plantillaCreada" value="2" />
                    <input type="submit" value="EDITAR" />
                </form>
                <?php
            }else 
            {
                ?>
            <form action="../models/creando.php" method="POST">
                CREAR PLANTILLA
                <input type="text" name="itNombre" value="" required />
                <input type="submit" value="CREAR" />
                </form>
                <?php
            }
            ?>
            
            

        </div>


    </body>

</html>
</html>
<?php
} else {
    header("Location: login.php");
}
?>