<?php

    // aquí recibimos los datos del formulario html desde index.php div form, probamos si entra: 
    echo 'saving <br><br>';

    // incluimos el archivo de configuración de acceso a nuestra Base de datos
    include("../db/db_mySql.php");

    // si en objecte 'save_task' enviat per POST veiem definides/plenes les variables, les guardem,
    // per elaborar la consulta SQL de INSERT amb les variables rebudes,
    // si es vol depurar:
    //    echo "<br>El fitxer save_task.php rep valors: ".$userMaster.", ".$description."<br><br>";
    //    echo "<br> " . $query;
    // Si la consulta ha fallat, amb DIE s'acaba l'execució i surt, mostrant el mens.

    if (isset($_POST['save_task'])){    
        $userMaster = $_POST['cmbMaster'];
        $description = $_POST['txtDescrip'];        
        $query = "INSERT INTO tasks(masterUsr_id, descrip) VALUES ('$userMaster', '$description')";   
        
        echo "<br> " . $query;

        $result = mysqli_query($cnn, $query);        
        if (!$result) {
            $_SESSION['message'] = 'not saved!';
            $_SESSION['message_type'] = 'danger';
            die("Query failed !!");
        }        

        // vamos a almacenar un mensaje para comunicarse entre ambas páginas para saber qué sucede
        //   y lo pintaremos en el index.php usando bootstrap, justo encima de la CARD; 
        //   con 2 variables de Session, una para texto mensaje, otra para color Danger o Success.
        $_SESSION['message'] = 'task saved';
        $_SESSION['message_type'] = 'success';

        // redireccionamos de nuevo al php inicial
        header("Location: ../index.php");
    }
?>
