<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="author"      content="Ignasi Ortiz" />
	<meta name="description" content="IT Academy - FullStack LAMP" />
    <title>PhP Data Persistence</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="d-inline">
                <img src="./images/data_logo_96x96.png"/>
                <a href="index.php" class="navbar-brand">PHP Test-CRUD:  mySql, mongo, bjson.</a>
            </div>
        </div>
    </nav>
    <br>
    <br>

    <?php
        include("./db/db_bjson.php");
        include("./db/db_mySql.php");
        include("./db/db_mongo.php");
    ?>
