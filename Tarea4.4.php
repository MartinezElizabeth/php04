////tarea4.4
<?php
// Bucle 1
for ($f = 1; $f <= 100; $f++) {  // Usar la misma variable $f
    echo $f;
}

// Bucle 2
echo PHP_EOL;
$valor = rand(1, 100);
$inicio = 1;
while ($inicio <= $valor) {
    echo $inicio;
    $inicio++;
}

// Bucle 3
echo PHP_EOL;
$i = 1;
do {
    $i++;
    echo "The number is " . $i . PHP_EOL;
} while ($i <= 3);  // Usar la misma variable $i

// Bucle 4
echo PHP_EOL;
$colors = array("Red", "Green", "Blue");
// Recorrer el array de colores
foreach ($colors as $value) {
    echo $value . PHP_EOL;
}
?>