
import 'dart:io';

void main() {
  print("Par, impar o cero");

  print("Digite un número cualquiera entero: ");

  int num1 = int.parse(stdin.readLineSync()!);

  if(num1 %2==0 && num1 != 0){
      
      print("${num1} Es un número par");
      
  }else if(num1 == 0){
      
      print("El número es igual a cero");
      
  }else{
      
      print("${num1} Es un número impar");
      
  }
}
