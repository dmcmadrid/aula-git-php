<?php
$titulo = "TITULO EQUIVOCADO";
$tareas = ["Repasar PHP", "Practicar Git"];
echo $titulo . PHP_EOL;
foreach ($tareas as $tarea) {
    echo "- " . $tarea . PHP_EOL;
}

echo "Total: ". count($tareas).PHP_EOL;

$tareas = ["Repasar PHP", "Practicar Git", "Leer el historial"];
