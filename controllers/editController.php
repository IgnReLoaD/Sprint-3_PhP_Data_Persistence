<?php

    // aquí rebem les dades del Form de index.php, mirem si entra: 
    echo 'editing... <br><br>';

    // incluim config access a BD
    include("../db/db_mySql.php");
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $querySelect = "SELECT * FROM tasks WHERE id_task = $id";
        $result = mysqli_query($cnn, $querySelect);
        if (mysqli_num_rows($result)==1) {
            $row = mysqli_fetch_array($result);
            $descrip = $row['descrip'];
            $created_at = $row['created_at'];
            $masterUsr = $row['masterUsr_id'];
            $slaveUsr = $row['slaveUsr_id'];
            $init = $row['init'];
            $done = $row['done'];
            $status = $row['status'];                        
        }
        if (!$result) {
            die("Query failed!");
        }
    }
    // nom del botó de Gravar és 'update':
    if (isset($_POST['update'])) {
        // echo 'actualitzant...';
        $id = $_GET['id'];
        $descrip = $_POST['descrip'];
        $slaveUsr = $_POST['slaveUsr'];

        // $init = $_POST['init'];
        
        $status = $_POST['cmbStatus'];  

        date_default_timezone_set("Europe/Madrid");
        if ($status=='done') $done = date("Y-m-d H:i:s");

        // ojo noms de camps conflictius:  init i status.
        $queryUpdate = "UPDATE tasks SET descrip='$descrip', slaveUsr_id='$slaveUsr', initiated='$init', done='$done', currentStatus='$status' WHERE id_task=$id";
        mysqli_query($cnn, $queryUpdate);
        $_SESSION['message'] = 'task updated';
        $_SESSION['message_type'] = 'success';
        header("Location: ../index.php");
    }

    // renderitzat de la nova pàgina per EDITAR:
    include("../includes/header.php") 
?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                <form action="editController.php?id=<?php echo $_GET['id'] ?> " method="POST">
                        <div class="form-group">
                            <input type="text" name="descrip" value="<?php echo $descrip; ?>" class="form-control" placeholder="nova descrip...">
                        </div>
                        <div class="form-group">
                            <select id="cmbStatus" name="cmbStatus">
                                <option value="pending">Pendent 0%</option>
                                <option value="initiate">Iniciat 10%</option>                
                                <option value="inProgress">En progrés 50%</option>  
                                <option value="inTesting">Testeig 90%</option>  
                                <option value="done">Acabat 100%</option>  
                            </select>  
                            <!-- <textarea name="description" class="form-control" placeholder="nueva descrip" rows="3"></textarea> -->
                        </div>
                        <button class="btn btn-success" name="update">
                            <i class="fa-regular fa-cloud-arrow-up"></i> 
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.php") ?>
