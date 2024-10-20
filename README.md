# Proyecto 004

Este repositorio contiene los siguientes archivos relacionados con tareas y temas en PHP:

## Archivos PHP

### Tema4.1

<?php
$dia = 24; //se declara una variable de tipo integer.
$sueldo = 758.43;//se declara una variable  de tipo double.
$nombre = "UTIC";//se declara una variable de tipo String
$exite = true;//se declara una variable de tipo boolean.
echo "Valraible entera:";
echo $dia;
echo PHP_EOL;;
echo"Variable double:";
echo $sueldo;
echo PHP_EOL;
echo "Variable string:";
echo $nombre;
echo PHP_EOL;
echo "Variable boolean:";
?>
# Tarea3
<?php
$cadena1 = "diego";
$cadena2 = "juan";
$cadena3 = "ana";
$todo = $cadena1.", ".$cadena2.", " . $cadena3.PHP_EOL;
echo $todo;
$edad1 = 24 ;
echo $cadena1 . "tiene $edad1 de edad " . PHP_EOL;
?>


# Tarea4.4
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
# Tema2
[<?php
//Condición 1
$valor = rand (1,10);
echo "El valor sorteado es $valor".PHP_EOL;
if ($valor<= 5 ){
    echo " Es menor o igual  a 5";
}else{
    echo "Es mayor a 5 ";


}
//Condición 2 
echo PHP_EOL;
$valor = rand(1,100);
echo "El valor sorteado es $valor".PHP_EOL;
if ($valor <=9){
        echo"Tiene un digito ";
}else{
    if($valor <= 100){
        echo"Tiene 2 digitos";

    }else{
        echo "Tiene 3 digitos ";
    }
}
//Condición 3 
echo PHP_EOL;
$valor = rand(1,100);
echo "El valor sorteado es $valor".PHP_EOL;
if ($valor <= 9 ){
    echo"Tiene un digito ";
}elseif ($valor <100){
    echo"Tiene 2 digitos ";
}else{
    echo "Tiene 3 digitos";
}
Uploading Tema2.php…]()

  
## Archivos de Imágenes (PNG)

![Tarea](https://github.com/user-attachments/assets/45ca09f7-2f30-4d5c-8208-c8fd3d1892fc)
![Tarea3](https://github.com/user-attachments/assets/dfd6fe8b-8a92-46a7-b2ff-48b82c48933d)
![Tarea4 4](https://github.com/user-attachments/assets/d3531ee3-c8e9-461a-b7dd-34d9b4ed0bed)
![Tema2](https://github.com/user-attachments/assets/163fb2cd-b532-41d6-ad7f-cfa3ae784e3d)
