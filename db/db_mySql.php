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
    printf("Server: " . $nomServerBaseDeDades . " / ");
    printf("Usuari: " . $nomUsuariBaseDeDades . " / ");
    printf("Passwd: " . $pwdUsuariBaseDeDades . " / ");
    printf("BDades: " . $nomNostraBaseDeDades . " / ");

    // comprobar conexió:
    if (isset($cnn)){
        echo "DB is connected. / ";
    }

    if ($cnn->connect_error)
    {
        printf("Error de connexió a la BD.");
    }
    else
    {
        printf("Connexió ok!");
    }

    // dades combo desplegable usuaris:
    $queryUsersAll = "SELECT * FROM users";
    $recordsetUsers1 = mysqli_query($cnn,$queryUsersAll);
    $recordsetUsers2 = mysqli_query($cnn,$queryUsersAll);
