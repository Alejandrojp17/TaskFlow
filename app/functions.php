<?php

function obtenerClasePrioridad($prioridad)
{
    switch ($prioridad) {
        case 'alta':
            return 'priority-alta';
        case 'media':
            return 'priority-media';
        case 'baja':
            return 'priority-baja';
        default:
            return ' ';
    }
    }
    function renderizarTarea($tarea) {
        $clasesTarea = 'task-item';

        if ($tarea['completado']) {
            $clasesTarea .= ' completed';
        }
        $clasesTarea .= ' ' . obtenerClasePrioridad($tarea['prioridad']);

        return "<li class=\"$clasesTarea\">{$tarea['titulo']}</li>";
    }


