<?php

// session_start();

    // parses the settings file
    // $settings = parse_ini_file(ROOT_PATH . '/config/settings.ini', true);

    // $settings = parse_ini_file('./config/settings.ini', true);

    // $nomDriverBaseDeDades = $settings['databaseMySql']['dbDriver'];
    // $nomServerBaseDeDades = $settings['databaseMySql']['ServHost'];
    // $nomNostraBaseDeDades = $settings['databaseMySql']['dataBase'];
    // $nomUsuariBaseDeDades = $settings['databaseMySql']['usr'];
    // $pwdUsuariBaseDeDades = $settings['databaseMySql']['pwd'];				

    $nomServerBaseDeDades = "localhost";
    $nomUsuariBaseDeDades = "root";
    $pwdUsuariBaseDeDades = "";
    $nomNostraBaseDeDades = "tareas_crud_php";

    // crear objecte cnn de tipus class mysqli(server,user,pwd,nameBD)
    //      també es pot fer:  $cnn = mysqli_connect('localhost','root','','php_mysql_crud');
    $cnn = new mysqli($nomServerBaseDeDades, 
                      $nomUsuariBaseDeDades, 
                      $pwdUsuariBaseDeDades, 
                      $nomNostraBaseDeDades);
        
    // debugar
    printf("Server: " . $nomServerBaseDeDades . "<br>");
    printf("Usuari: " . $nomUsuariBaseDeDades . "<br>");
    printf("Passwd: " . $pwdUsuariBaseDeDades . "<br>");
    printf("BDades: " . $nomNostraBaseDeDades . "<br>");

    // comprobar conexió:
    if (isset($cnn)){
        echo "DB is connected.<br>";
    }

    if ($cnn->connect_error)
    {
        printf("Error de connexió a la BD.<br>");
    }
    else
    {
        printf("Connexió ok!<br>");
    }

    // dades combo desplegable usuaris:
    $queryUsersAll = "SELECT * FROM users";
    $recordsetUsers = mysqli_query($cnn,$queryUsersAll);
