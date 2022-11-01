<?php
    // include("./db/db_mySql.php");
?>

    <!-- TARJETA CARD i en el seu body la presentación en pantalla del Formulari -->
        <!-- FORM: envia per mètode Post les dades de FORM al save_task.php  -->
        <!-- <label for="cmbMaster"> &nbsp; &nbsp; Escull usurari Master: </label> -->
        <!-- autofocus situa el cursor en el lloc, a l'entrar a la pàgina -->
        <!-- amb PhP, carregar la llista COMBO amb els valors de cada usuari  -->
        <!-- textarea permet més text, posem 3 files, i classe bootstrap form-control -->
        <!-- ACCIO ENVIAR (var 'save_task') i estil bootstrap BLOCK pq ocupi ample tarjeta -->

    <div class="card card-body bg-yellow-200">
        <!-- <form action= -->
        <!-- <?php ROOT_PATH . "/controllers/saveController.php"?> -->
        <!-- method="POST">             -->

        <form action="controllers/saveController.php" method="POST">    
            <div class="form-group">                
                <select class="form-control" id ="cmbMaster" name="cmbMaster" autofocus>
                    <option value="0" name="optMaster">usuari Master...</option>                    
                    <?php                      
                        // echo $fieldset;
                        while ($fieldset1 = mysqli_fetch_array($recordsetUsers1)){
                            echo'<option value="'.$fieldset1['id_user'].'">'.$fieldset1['rol'].' - '.$fieldset1['name'].'</option>';
                        }
                    ?>
                </select> 
            </div>
            <div class="form-group">                
                <select class="form-control" id ="cmbSlave" name="cmbSlave">
                    <option value="0" name="optSlave">usuari Slave...</option> 
                    <?php                      
                        // echo $fieldset;
                        while ($fieldset2 = mysqli_fetch_array($recordsetUsers2)){
                            echo'<option value="'.$fieldset2['id_user'].'">'.$fieldset2['rol'].' - '.$fieldset2['name'].'</option>';
                        }
                    ?>
                </select> 
            </div>
            <div class="form-group">                
                <textarea class="form-control" name="txtDescrip" id="txtDescrip" rows="3" placeholder="task descrip..."></textarea>
            </div>            
            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save">
        </form>

    </div>