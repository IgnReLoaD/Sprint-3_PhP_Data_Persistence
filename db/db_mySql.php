<?php

session_start();

    $nomServerBaseDeDades = "localhost";
    $nomUsuariBaseDeDades = "root";
    $pwdUsuariBaseDeDades = "";
    $nomNostraBaseDeDades = "to-do";

    // crear objecte cnn de tipus class mysqli(server,user,pwd,nameBD)
    //      també es pot fer:  $cnn = mysqli_connect('localhost','root','','php_mysql_crud');
    $cnn = new mysqli($nomServerBaseDeDades, 
                      $nomUsuariBaseDeDades, 
                      $pwdUsuariBaseDeDades, 
                      $nomNostraBaseDeDades);
        
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
