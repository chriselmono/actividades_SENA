import 'dart:io';

void main() {
  print("Mayor o menor de edad");
  
  print("¿Cuál es su nombre?");
  
  var nombre = stdin.readLineSync();

  print("Digite su edad: ");

  int edad = int.parse(stdin.readLineSync()!);

  if(edad >= 18 && edad < 100){
      
      print("${nombre} Usted es mayor de edad.");
      
  }else if(edad <=0 || edad >=100){
      
      print("Digite una edad valida");
      
  }else{
      
      print("${nombre} Usted es menor de edad.");
      
  }
}
