import 'dart:io';

void main() {
    
    //solicitamos al usuario sus notas que sean de 0.0 a 0.5
  print("Aprovo o no la materia");
  
  print("Digite su primera nota de la materia.");
  
  double nota1 = double.parse(stdin.readLineSync()!);
  
  print("Digite su segunda nota de la materia.");
  
  double nota2 = double.parse(stdin.readLineSync()!);
  
  print("Digite su tercera nota de la materia.");
  
  double nota3 = double.parse(stdin.readLineSync()!);
  
  print("Digite su cuarta nota de la materia.");
  
  double nota4 = double.parse(stdin.readLineSync()!);
  
  print("Digite su quinta nota de la materia.");
  
  double nota5 = double.parse(stdin.readLineSync()!);

//calculamos el promedio de notas
    
    double promedio = (nota1 + nota2 + nota3 + nota4 + nota5) / 5;
    
    //validamos si pasó o no la materia

  if(promedio >= 3 && promedio < 5){
      
      print("Su nota es igual a ${promedio}. Usted ha aprovado");
      
  }else if(promedio < 3 && promedio > 0){
      
      print("Su nota es ${promedio}. Ha perdido la materia.");
      
  }else{
      
      print("Nota no valida.");
      
  }
  //tenemos en centa qe la materia es de 0.0 a 5.0, no más ni menos
}
