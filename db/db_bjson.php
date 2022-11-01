<?php
    $users = array(
        array("1","Ruben"),
        array("2","Marta"),
        array("3","Raquel"),
        array("4","Carlos")
    );

    $tasks = [
        array(
            'id_task' => '1',
            'dateTime' => '2022-11-01 01:35:00',
            'masterUsr' => '1',
            'slaveUsr' => '2',
            'init' => '2022-11-01 01:40:00',
            'done' => '2022-11-01 01:50:00',
            'status' => 'done',
            'deleted' => 'false',
            'descrip' => 'Estudiar Tailwind',
            'subTasks' => array(
                'subTask1' => 'arrancar ordenador',
                'subTask2' => 'abrir explorador',
                'subTask3' => 'ejecutar visualizador'
                )
        ),
        array(
            'id_task' => '2',
            'dateTime' => '2022-11-01 01:36:00',
            'masterUsr' => '1',
            'slaveUsr' => '3',
            'init' => 'null',
            'done' => 'null',
            'status' => 'pending',
            'deleted' => 'false',
            'descrip' => 'Estudiar Laravel',
            'subTasks' => array(
                'subTask1' => 'arrancar ordenador',
                'subTask2' => 'abrir vscode',
                'subTask3' => 'implementar clases'
                )
        ),
        array(
            'id_task' => '3',
            'dateTime' => '2022-11-01 01:37:00',
            'masterUsr' => '1',
            'slaveUsr' => '4',
            'init' => '2022-11-01 01:39:00',
            'done' => 'null',
            'status' => 'inprogress',
            'deleted' => 'false',
            'descrip' => 'Estudiar MongoDB',
            'subTasks' => array(
                'subTask1' => 'arrancar ordenador',
                'subTask2' => 'abrir Compass',
                'subTask3' => 'implementar consultas'
                )
        )
    ];
