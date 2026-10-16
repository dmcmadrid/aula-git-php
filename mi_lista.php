<?php
$titulo = "Mi lista de estudio";
$tareas = ["Repasar PHP", "Practicar Git"];
echo $titulo . PHP_EOL;
foreach ($tareas as $tarea) {
    echo "- " . $tarea . PHP_EOL;
}