import 'dart:io';

void main(){
    
    int suma = 0;
    
    for (int i = 0; i < 10; i++) {
        
        print("Ingrese un número");
        i + 1;
        
        int numero = int.parse(stdin.readLineSync()!);
        
        suma += numero;

    }
    
    print("La suma es igual a: ${suma} ");
    
    double promedio = suma / 10;
    
    print(" El promedio de la suma es: ${promedio}");
  
}
