<?php
    include("./includes/header.php");
    include("./controllers/controller.php");
?>
    <!-- INI MAIN ----------- -->
    <section>
        <form action="index.php" method="post">
            <label for="cmbData">Selecciona la font de dades: </label>
            <select id="cmbData" name="cmbData">
                <option value="bjson">BJSON - Arxiu de JavaScript Object Notation.</option>
                <option value="mysql">mySql - Base de dades implementada en mySQL.</option>                
                <option value="mongo">mongo - Base de dades implementada en Mongo.</option>  
            </select>            
            &nbsp; &nbsp;<input type="submit" value=" Endavant! ">
            <hr>     
        </form>
    </section>

    <?php
        if (isset($_POST['cmbData'])) {
            // ENTRADA DE DADES - en view
            $strData = $_POST['cmbData'];
            // LLOGICA DE DADES - en controller
            $strResult = actions($strData);
            // SORTIDA DE DADES - en view
            output($strResult);
        }
    ?>
    <!-- END MAIN --------------- -->
<?php    
    include("./includes/footer.php");
?>

