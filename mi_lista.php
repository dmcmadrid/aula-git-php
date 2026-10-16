<?php
$titulo = "Mi lista de estudio";
$tareas = ["Repasar PHP", "Practicar Git", "Leer el historial"];
echo $titulo . PHP_EOL;
foreach ($tareas as $tarea) {
    echo "- " . $tarea . PHP_EOL;
}

echo "Total: ". count($tareas).PHP_EOL;
