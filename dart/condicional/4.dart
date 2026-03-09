import 'dart:io';

void main() {
  print("Número mayor o menor");
  
  print("Digite un número cualquiera.");
  
  int x = int.parse(stdin.readLineSync()!);
  
  print("Digite otro número cualquiera.");
  
  int y = int.parse(stdin.readLineSync()!);

  if(x > y){
      
      print("${x} Es mayor a ${y}.");
      
  }else if(x < y){
      
      print("${x} es menor que ${y}.");
      
  }else{
      
      print("Ambos números son iguales.");
      
  }
}
