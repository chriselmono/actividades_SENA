import 'dart:io';

void main() {
  print("Número negativo, positivo o cero");
  
  print("Digite un número positivo o negativo");
  
  int x = int.parse(stdin.readLineSync()!);

  if(x > 0){
      
      print("Su número es positivo.");
      
  }else if(x < 0){
      
      print("Su número es negativo.");
      
  }else{
      
      print("El número digitado es 0.");
      
  }
}
