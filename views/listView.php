<?php
    // include("./db/db_mySql.php");
?>

<!-- Arxiu per muntar una taula-llista amb totes les tasques entrades -->
<table class="table table-border" >
    <thead class="bg-blue-400">
        <tr>
            <th>Tasca</th><th>Creació</th><th>Master</th><th>Executor</th><th>Accions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM tasks";
            $result = mysqli_query($cnn, $query);

            while($row = mysqli_fetch_array($result)) {  ?>
                <tr>
                    <td> <?php echo $row['descrip'] ?> </td>
                    <td> <?php echo $row['created_at'] ?> </td>
                    <td> <?php echo $row['masterUsr_id'] ?> </td>
                    <td> <?php echo $row['slaveUsr_id'] ?> </td>
                    <td> <a href="../controllers/editController.php?id=<?php echo $row['id'] ?> " class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                            </a>
                            <a href="../controllers/deleteController.php?id=<?php echo $row['id'] ?> " class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                            </a>
                    </td>
                </tr>
            <?php } ?>                         
    </tbody>
</table>