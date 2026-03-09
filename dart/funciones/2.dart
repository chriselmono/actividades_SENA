import 'dart:io';
import 'dart:math';

void Rectangulo(){
    
    print( "Escogiste El Rectangulo ");
    
    print("Digita el largo del rectángulo. ");
    
    int largo = int.parse(stdin.readLineSync()!);
    
    print("Digite el ancho del rectángulo");
    
    int ancho = int.parse(stdin.readLineSync()!);

    int operacion = largo * ancho;
    print( "EL area del Rectangulo es: ${operacion}.");
}

void Cuadrado()
{
    print( "Escogiste El Cuadrado ");
    
    print("Digite la longitud del cuadrado");
    
    int lado = int.parse(stdin.readLineSync()!);
    
    int operacion = lado * lado;
    
    print( "EL area Del Cuadrado es:  ${operacion}");
}

void Paralelogramo()
{
    print( "Escogiste Paralelogramo ");
    
    print("Largo de la base: ");
    
    int largo = int.parse(stdin.readLineSync()!);
    
    print("Digite la altura: ");
    
    int altura = int.parse(stdin.readLineSync()!);
    
    int operacion = largo * altura;
    
    print( "EL area Del Paralelogramo es: ${operacion}");
}

void Rombo()
{
    print( "Escogiste Rombo. ");
    
    print("Digite el largo de la diagonal mayor.");
    
    int dmay = int.parse(stdin.readLineSync()!);
    
    print("Digite el largo de la diagonal menor");
    
    int dmen = int.parse(stdin.readLineSync()!);
    
    int multiplicacion = dmay * dmen;
    double operacion = multiplicacion / 2;
    print( "EL area Del Rombo es:  ${operacion}");
}

void Trapecio()
{
    print( "Escogiste Trapecio. ");
    
    print("Digite la Base mayor: ");
    
    int bmay = int.parse(stdin.readLineSync()!);
    
    print("Digite la base menor: ");
    
    int bmen = int.parse(stdin.readLineSync()!);
    
    print("Digite la altura: ");
    
    int altura = int.parse(stdin.readLineSync()!);
    
    int suma = bmay + bmen;
    double division = suma / 2;
    double operacion = division * altura;
    print( "EL area Del Trapecio es:  ${operacion}");
}

void triangulo()
{
    print( "Escogiste Triangulo. ");
    
    print("Digite la base: ");
    
    int base = int.parse(stdin.readLineSync()!);
    
    print("Digite la altura: ");
    
    int altura = int.parse(stdin.readLineSync()!);
    
    int suma = base * altura;
    
    double opcion = suma / 2;
    
    print( "EL area Del Triangulo es: ${opcion}");
}

void trianguloequilatero()
{
    print( "Escogiste Triangulo Equilatero. ");
    
    print("Digite el largo: ");
    
    int largo = int.parse(stdin.readLineSync()!);
    
    double raiz = sqrt(3);
    
    int cuadrado = largo * largo;
    
    double res = cuadrado * raiz;
    
    double operacion = res / 4;
    
    print( "EL area Del Triangulo Equilatero es: ${operacion}");
}

void trianguloRectangulo()
{
    print( "Escogiste Triangulo Rectangulo. ");
    
    print("Digite la base: ");
    
    int base = int.parse(stdin.readLineSync()!);
    
    print("Digite la altura: ");
    
    int altura = int.parse(stdin.readLineSync()!);
    
    double res = (base * altura) / 2;
    
    print( "EL area Del Triangulo Rectangulo es: ${res}");
}

void PoligonoRegular()
{
    print( "Poligono Regular . ");
    
    print("Digite el perimetro.");
    
    double perimetro = double.parse(stdin.readLineSync()!);
    
    print("Digite la apotema: ");
    
    double apotema = double.parse(stdin.readLineSync()!);
    
    double res = (perimetro * apotema) / 2;
    
    print( "EL area Del Poligono Regular es:  ${res}");
}

//Resultados
void llamada(){

    void menu()
{
    
    print("Seleccione una opción");
    print("1. Rectángulo.");
    print("2. Cuadrado.");
    print("3. Paralelogramo.");
    print("4. Rombo.");
    print("5. Trapecio.");
    print("6. Triángulo.");
    print("7. Triángulo equilatero.");
    print("8. Triángulo Rectángulo.");
    print("9. Poligono Regular.");
}

menu();


    int opcion = int.parse(stdin.readLineSync()!);

    if (opcion == 1) {
        Rectangulo();
    } else if (opcion == 2) {
        Cuadrado();
    } else if (opcion == 3) {
        Paralelogramo();
    } else if (opcion == 4) {
        Rombo();
    } else if (opcion == 5) {
        Trapecio();
    } else if (opcion == 6) {
        triangulo();
    } else if (opcion == 7) {
        trianguloequilatero();
    } else if (opcion == 8) {
        trianguloRectangulo();
    } else if (opcion == 9) {
        PoligonoRegular();
    } else {
        print( "Opcion Invalida");
    }


}


void main(){
   
llamada();
   
}
