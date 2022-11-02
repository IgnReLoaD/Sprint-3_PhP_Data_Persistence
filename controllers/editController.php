<?php

    // aquí rebem les dades del Form de index.php, mirem si entra: 
    // echo 'editing... <br><br>';

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
            $init = $row['initiated'];
            $done = $row['done'];
            $status = $row['currentStatus'];                        
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
    // include("../includes/header.php");
?>
<html>
<head>
    <title>PhP Data Persistence</title>
    <link rel="shortcut icon" href="../images/favicon.ico">
    <!-- cdn per incorporar Tailwind al projecte  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- bootstrap 4 --> 
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
    <!-- font awesome 5  -->
    <script src="https://kit.fontawesome.com/afe5486742.js" crossorigin="anonymous"></script>    
</head>
<body class="bg-blue-200">
    <div class="container p-4 h-screen">
        <div class="row h-4/5">
            <div class="col-md-4 mx-auto">
                <div class="card card-body bg-yellow-200 h-100">
                <form action="editController.php?id=<?php echo $_GET['id'] ?> " method="POST">                        
                        <div class="form-group mb-6">
                            <select id="cmbStatus" name="cmbStatus">
                                <option value="pending">Pendent 0%</option>
                                <option value="initiate">Iniciat 10%</option>                
                                <option value="inProgress">En progrés 50%</option>  
                                <option value="inTesting">Testeig 90%</option>  
                                <option value="done">Acabat 100%</option>  
                            </select>  
                            <!-- <textarea name="description" class="form-control" placeholder="nueva descrip" rows="3"></textarea> -->                            
                        </div>
                        <div class="form-group mb-6">
                            <input type="text" name="descrip" value="<?php echo $descrip; ?>" class="form-control" placeholder="nova descrip...">
                        </div>
                        <button class="btn btn-success mt-6 justify-self-end" name="update">
                            <!-- <i class="fa-regular fa-cloud-arrow-up"></i>   -->
                            <!-- <i class="fa-regular fa-arrow-circle-up"></i> -->
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.php") ?>
