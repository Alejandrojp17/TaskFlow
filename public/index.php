<?php
// Bloque de configuración principal
define ("SITE_NAME", "Taskflow");
$pageTitle = SITE_NAME. " - Pagina de inicio.";
$userName = "Alejandro";
$userAge = 26;
$isPremiumUser = false;
$tasks = [
    [
        'title' => 'Preparar informe semanal',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Responder correos pendientes',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Actualizar base de datos de clientes',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Revisar presupuesto del proyecto',
        'completed' => true,
        'priority' => 'baja'
    ],
    [
        'title' => 'Planificar reunión del lunes',
        'completed' => false,
        'priority' => 'media'
    ]
];
?>

<?php include '../app/views/header.php';?>

<h2> Tareas Pendientes </h2>;
<ul>

    <?php
    foreach ($tasks as $tarea) {
        // Clase base
        $taskClasses = 'task-item';

        // Si la tarea está completada, añade clase "completed"
        if ($tarea['completed']) {
            $taskClasses .= ' completed';
        }

        // Añade clase según prioridad
        switch ($tarea['priority']) {
            case 'alta':
                $taskClasses .= ' priority-alta';
                break;
            case 'media':
                $taskClasses .= ' priority-media';
                break;
            case 'baja':
                $taskClasses .= ' priority-baja';
                break;
        }

        // Imprime el elemento de lista
        echo "<li class='$taskClasses'>{$tarea['title']}</li>";
    }
    ?>

</ul>

<?php include '../app/views/footer.php';?>