import 'dart:io';

void main(){
    
    print("Ingrese un número entero: ");
    
    int numero = int.parse(stdin.readLineSync()!);
    
    print("Tabla de multiplicar del número ${numero}");
    
    for (int i = 1; i <= 10; i++) {
        
        int producto = numero * i;
        
        print(" ${numero} x ${i} = ${producto}");
        
    }
  
}
