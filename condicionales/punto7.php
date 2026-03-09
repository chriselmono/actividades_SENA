<?php

$menu = "Seleccione la opción de conversión: 
1. Fahrenheit a Celsius.
2. Celsius a Fahrenheit.
3. Fahrenheit a Kelvin.
4. Fahrenheit a rankine
5. Fahrenheit a Réaumur.
6. Celsius a Kelvin.
7. Celsius a Rankine.
8. Celsius a Réaumur.
9. Kelvin a Celsius.
10. Kelvin a Fahrenheit
11. Kelvin a Rankine.
12. Kelvin a Réaumur.
13. Rankine a Celsius.
14. Rankine a Farenheit.
15. Rankine a Kelvin.
16. Rankine a Réaumur.
17. Réaumur a Celsius.
18. Réaumur a Farenheit.
19. Réaumur a Kelvin.
20. Réaumur a Rankine.";

$opcion = readline("$menu");

$temp = readline("Ingrese la temperatura a convertir: ");

if ($opcion == 1) {
    $c = ($temp - 32) / 1.8;
    echo "La temperatura en Celsius es: $c °C";

} elseif ($opcion == 2) {
    $f = ($temp * 1.8) + 32;
    echo "La temperatura en Fahrenheit es: $f °F";

} elseif ($opcion == 3) {
    $k = ($temp + 459.67) / 1.8;
    echo "La temperatura en Kelvin es: $k °K";

} elseif ($opcion == 4) {
    $ra = $temp + 459.67;
    echo "La temperatura en Rankine es: $ra °Ra";

} elseif ($opcion == 5) {
    $re = ($temp -32 ) / 2.25;
    echo "La temperatura en Réaumur es: $re °Re";

} elseif ($opcion == 6) {
    $k = $temp + 273.15;
    echo "La temperatura en Kelvin es: $k °K";

} elseif ($opcion == 7) {
    $ra = ($temp * 1.8) + 32 + 469.67;
    echo "La temperatura en Rankine es: $ra °Ra";

} elseif ($opcion == 8) {
    $re = $temp * 0.8;
    echo "La temperatura en Réaumur es: $re °Re";

} elseif ($opcion == 9) {
    $c = $temp - 273.15;
    echo "La temperatura en Celsius es: $c °C";

} elseif ($opcion == 10) {
    $f = ($temp * 1.8) - 459.67;
    echo "La temperatura en Fahrenheit es: $f °F";

} elseif ($opcion == 11) {
    $ra = $temp * 1.8;
    echo "La temperatura en Rankine es: $ra °Ra";

} elseif ($opcion == 12) {
    $re = ($temp - 273.15) * 0.8;
    echo "La temperatura en Réaumur es: $re °Re";

} elseif ($opcion == 13) {
    $c = ($temp - 32 - 459.67) / 1.8;
    echo "La temperatura en Celsius es: $c °C";

} elseif ($opcion == 14) {
    $f = $temp - 459.67;
    echo "La temperatura en Fahrenheit es: $f °F";
    
} elseif ($opcion == 15) {
    $k = $temp / 1.8;
    echo "La temperatura en Kelvin es: $k °K";

} elseif ($opcion == 16) {
    $re = ($temp - 32 - 459.67) / 2.25;
    echo "La temperatura en Réaumur es: $re °Re";

} elseif ($opcion == 17) {
    $c = $temp * 1.25;
    echo "La temperatura en Celsius es: $c °C";

} elseif ($opcion == 18) {
    $f = ($temp * 2.25) + 32;
    echo "La temperatura en Fahrenheit es: $f °F";

} elseif ($opcion == 19) {
    $k = ($temp * 1.25) + 273.15;
    echo "La temperatura en Kelvin es: $k °K";

} elseif ($opcion == 20) {
    $ra = ($temp * 2.25) + 32 + 459.67;
    echo "La temperatura en Rankine es: $ra °Ra";

}else{
    echo "Opción no valida";
}

?>