<?php

    // aquí rebem les dades del Form de index.php, mirem si entra: 
    echo 'deleting <br><br>';

    // incluim config access a BD
    include("../db/db_mySql.php");

    // OJO! error molt comú, va costar molt això... 
    // el id de la taula és 'id_task' i l'escrivim exacte en listView i en queryDelete
    // però mentre el passem per GET l'estem passant en la URL i li hem posat així '?id'
    // per tan el IF del isset del GET només entrarà si preguntem per 'id'.
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // echo "El id val: " . $id;
        $queryDelete = "DELETE FROM tasks WHERE id_task = $id";
        // echo "queryDelete val: " . $queryDelete;
        $result = mysqli_query($cnn, $queryDelete);
        if (!$result) {
            die("Query failed");
        }
    }

    // secció de missatges per msgsView.php
    $_SESSION['message'] = 'tasca esborrada';
    $_SESSION['message_type'] = 'danger';

    // retornem al index
    header("Location: ../index.php");
?>