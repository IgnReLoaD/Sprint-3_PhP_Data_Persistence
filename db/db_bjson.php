<?php
    $users = [
        array(
            'id_user' => '1',
            'name' => 'Ruben',
            'rol' => 'boss'
        ),
        array(
            'id_user' => '2',
            'name' => 'Marta',
            'rol' => 'manager'
        ),
        array(
            'id_user' => '3',
            'name' => 'Raquel',
            'rol' => 'office'
        ),
        array(
            'id_user' => '4',
            'name' => 'Carlos',
            'rol' => 'office'
        )
    ];

    $tasks = [
        array(
            'id_task' => '1',
            'created_at' => '2022-11-01 01:35:00',
            'masterUsr_id' => '1',
            'slaveUsr_id' => '2',
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
            'created_at' => '2022-11-01 01:36:00',
            'masterUsr_id' => '1',
            'slaveUsr_id' => '3',
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
            'created_at' => '2022-11-01 01:37:00',
            'masterUsr_id' => '1',
            'slaveUsr_id' => '4',
            'init' => '2022-11-01 01:39:00',
            'done' => 'null',
            'status' => 'in_progress',
            'deleted' => 'false',
            'descrip' => 'Estudiar MongoDB',
            'subTasks' => array(
                'subTask1' => 'arrancar ordenador',
                'subTask2' => 'abrir Compass',
                'subTask3' => 'implementar consultas'
                )
        )
    ];
