import 'dart:io';

void main() {
  print("Calcular distancia de movimiento rectilineo");

  print("Digite la velocidad en km/h: ");

  int vel = int.parse(stdin.readLineSync()!);
  
  print("Digite el tiempo en horas: ");
  
    int tiem = int.parse(stdin.readLineSync()!);

  int dis = vel * tiem;

  print("La distancia recorrida es igual a ${dis} Km");
  
}
