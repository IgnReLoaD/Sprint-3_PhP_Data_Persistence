<?php
    include("./includes/header.php");
    include("./controllers/mainController.php");
    include("./includes/bdSelector.php");
?>
    <!-- sección con formulario con un contenedor (izq) y una tabla (der),
    la class container permite centrar (agrega espacios a todos los lados) 
    y un padding de 4 para que se vea bien, con una fila y dentro dos columnas 
    la primera columna es de tamaño 4 cols (md-4) 
    ... para colocar un formulario aspecto tarjeta (un div con classe card)
    y una columna de 8 para añadir las tareas que vamos creando -->

    <main class="container p-4">
        <section class="row">
            <!-- div izquierdo para el formulario de entrada de datos  -->
            <inputs class="col-md-4">                
                <?php
                //  aquí un pedazo php que muestre los mensajes "grabado ok" 
                include("./views/msgsView.php");
                //  aquí un pedazo php que muestre Formulario entrada datos
                include("./views/formView.php");
                ?>
            </inputs>
            <!-- div derecho para la tabla del listado de datos  -->
            <outputs class="col-md-8">
                <?php
                //  aquí un pedazo php que muestre una tabla con los datos
                include("./views/listView.php");
                ?>
            </outputs>
        </section>
    </main>

<?php    
    include("./includes/footer.php");
?>

