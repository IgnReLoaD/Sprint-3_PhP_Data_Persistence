<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="author"      content="Ignasi Ortiz" />
	<meta name="description" content="IT Academy - FullStack LAMP" />
    <title>PhP - CRUD</title>

    <!-- cdn per incorporar Tailwind al projecte  -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">PHP MySQL CRUD</a>
        </div>
    </nav>

    <?php
        include("./db/db_bjson.php");
        // include("./db/db_mySql.php");
        // include("./db/db_mongo.php");
    ?>
