<?php

declare(strict_types=1);

//Funciones
function Rectangulo()
{
    echo "Escogiste El Rectangulo \n";
    $largo = readline("Cual es el largo de Tu Reactangulo: \n");
    $ancho = readline("Cual es el ancho de Tu Rectangulo: \n");
    $operacion = $largo * $ancho;
    echo "EL area del Rectangulo es: {$operacion} \n";
}

function Cuadrado()
{
    echo "Escogiste El Cuadrado ";
    $lado = readline("Cual es la medida de los lados: \n");
    $operacion = $lado * $lado;
    echo "EL area Del Cuadrado es:  " . $operacion;
}

function Paralelogramo()
{
    echo "Escogiste Paralelogramo \n";
    $largo = readline("Cual es el largo de la Base: \n");
    $altura = readline("Cual es el altura : \n");
    $operacion = $largo * $altura;
    echo "EL area Del Paralelogramo es: " . $operacion;
}

function Rombo()
{
    echo "Escogiste Rombo \n";
    $diagonalMa = readline("Cual es el largo de la Diagonal Mayor: \n");
    $diagonalMe = readline("Cual es el largo de la Diagonal Menor: \n");
    $multiplicacion = $diagonalMa * $diagonalMe;
    $operacion = $multiplicacion / 2;
    echo "EL area Del Rombo es:  " . $operacion;
}

function Trapecio()
{
    echo "Escogiste Trapecio \n";
    $BaseMa = readline("Cual es la Base Mayor: \n");
    $BaseMe = readline("Cual es la Base Menor: \n");
    $altura = readline("Cual es la Altura:  \n");
    $suma = $BaseMa + $BaseMe;
    $division = $suma / 2;
    $operacion = $division * $altura;
    echo "EL area Del Trapecio es:  " . $operacion;
}

function triangulo()
{
    echo "Escogiste Triangulo \n";
    $Base = readline("Cual es la Base : \n");
    $altura = readline("Cual es la Altura:  \n");
    $suma = $Base * $altura;
    $opcion = $suma / 2;
    echo "EL area Del Triangulo es:  " . $opcion;
}

function trianguloequilatero()
{
    echo "Escogiste Triangulo Equilatero \n";
    $largo = readline("Cual es el largo: \n");
    $raiz = sqrt(3);
    $cuadrado = $largo * $largo;
    $suma = $cuadrado * $raiz;
    $operacion = $suma / 4;
    echo "EL area Del Triangulo Equilatero es:  " . $operacion;
}

function trianguloRectangulo()
{
    echo "Escogiste Triangulo Rectangulo \n";
    $Base = readline("Cual es la Base : \n");
    $altura = readline("Cual es la Altura:  \n");
    $suma = $Base * $altura;
    $opcion = $suma / 2;
    echo "EL area Del Triangulo Rectangulo es:  " . $opcion;
}

function PoligonoRegular()
{
    echo "Poligono Regular \n";
    $perimetro = readline("Cual es la perimetro : \n");
    $apotema = readline("Cual es la apotema:  \n");
    $multiplicacion = $perimetro * $apotema;
    $opcion = $multiplicacion / 2;
    echo "EL area Del Poligono Regular es:  " . $opcion;
}

//Resultados
function llamada(){

    function menu()
{
    $menu = "Seleccione una Opcion: 
        1. Rectangulo ,  
        2. Cuadrado
        3. Paralelogramo , 
        4.Rombo
        5.Trapecio , 
        6.Triangulo
        7.Triangulo equilatero , 
        8. Triangulo Rectangulo 
        9. Poligono Regular \n";

        echo $menu;
}

menu();


    $opcion = readline("Escoje una opcion:  \n");

    if ($opcion == "1") {
        Rectangulo();
    } elseif ($opcion == "2") {
        Cuadrado();
    } elseif ($opcion == "3") {
        Paralelogramo();
    } elseif ($opcion == "4") {
        Rombo();
    } elseif ($opcion == "5") {
        Trapecio();
    } elseif ($opcion == "6") {
        triangulo();
    } elseif ($opcion == "7") {
        trianguloequilatero();
    } elseif ($opcion == "8") {
        trianguloRectangulo();
    } elseif ($opcion == "9") {
        PoligonoRegular();
    } else {
        echo "Opcion Invalida";
    }


}

llamada();

?>
