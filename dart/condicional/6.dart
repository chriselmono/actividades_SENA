import 'dart:io';
import 'dart:math';

void main() {
    
    //solicitamos al usuario un número del 1 al 9 para una operación
  print("Escoge una opción : 1. Área de un rectángulo.");
  print("2. Área de un cuadrado.");
  print("3. Área de un paralelogramo.");
  print("4. Área de un rombo.");
  print("5. Área de un trapecio."); 
  print("6. Área de un triángulo."); 
  print("7. Área de un triángulo equilatero."); 
  print("8. Área de un triángulo rectángulo."); 
  print("9. Área de un polígono regular.  Opción: ");
  
  int opcion = int.parse(stdin.readLineSync()!);
  

  if(opcion == 1){
      
      print("Digite un lado A de su rectángulo: ");
      
      double a = double.parse(stdin.readLineSync()!);
      
      print("Digite el lado B de su rectángulo: ");
      
      double b = double.parse(stdin.readLineSync()!);
      
      double area = a * b;
      
      print("El área de su rectángulo es igual a ${area}");
      
  }else if(opcion == 2){
      
      print("Digite la longitud de su cuadrado: ");
      
      double long = double.parse(stdin.readLineSync()!);
      
      double area = long * long;
      
      print("El área de su cuadrado es igual a ${area}");
      
  }else if(opcion == 3){
      
      print("Digite el valor de la base del paralelogramo: ");
      
      double b = double.parse(stdin.readLineSync()!);
      
      print("Digite el valor de la altura del paralelogramo: ");
      double h = double.parse(stdin.readLineSync()!);
      double area = b * h;
      print("El valor del área del paralelogramo es igual a: ${area}");
      
  }else if(opcion == 4){
      
      print("Digita el valor de la primera diagonal: ");
      
      double a = double.parse(stdin.readLineSync()!);
      
      print("Digite el valor de la segunda diagonal: ");
      
      double b = double.parse(stdin.readLineSync()!);
      
      double area = (a * b) /2;
      
      print("El valor del área del rombo es igual a: ${area}");
      
  }else if (opcion == 5){
      
      print("Digite el primer lado del trapecio: ");
      
      double a = double.parse(stdin.readLineSync()!);
      
      print("Digite el segundo lado del trapecio: ");
      
      double b = double.parse(stdin.readLineSync()!);
      
      print("Digite la altura del trapecio: ");
      
      double h = double.parse(stdin.readLineSync()!);
      
      double area = ((a + b)/2) * h;
      
      print("El área del trapecio es igual a: ${area}");
      
  }else if(opcion == 6){
      
      print("Digite el valor de la base del triángulo: ");
      
      double b = double.parse(stdin.readLineSync()!);
      
      print("Digite el valor de la altura del triángulo: ");
      
      double h = double.parse(stdin.readLineSync()!);
      
      double area = (b * h) /2;
      print("El área del triángulo es igual a: ${area}");
      
  }else if(opcion == 7){
      
      print("Digite el valor del lado del triángulo: ");
      
      double a =double.parse(stdin.readLineSync()!);
      
      double area = ((a * a) * sqrt(3))/4;
      
      print("El área del triángulo es igual a: ${area}");
      
  }else if(opcion == 8){
      
      print("Digite el valor del primer cateto: ");
      
      double ca = double.parse(stdin.readLineSync()!);
      
      print("Digite el valor del segundo cateto: ");
      
      double co = double.parse(stdin.readLineSync()!);
      
      double area = (ca * co) /2;
      
      print("El área del triángulo rectángulo es igual a: ${area}");
      
  }else if( opcion == 9){
      
      print("Digite el valor del perimetro del poligono regular: ");
      
      double p = double.parse(stdin.readLineSync()!);
      
      print("Digite el valor de la apotema: ");
      
      double ap = double.parse(stdin.readLineSync()!);
      
      double area = (p * ap)  / 2;
      
      print("El valor del área del poligono regular es igual a: ${area}"); 
      
  }else{
      
      print("Opción no valida");
      
  }
}
