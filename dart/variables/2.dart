import 'dart:io';

void main() {
  print("Calcular el cuadrado de un número");

  print("Digite un número");

  int num1 = int.parse(stdin.readLineSync()!);

  int cuadrado = num1 * num1;

  print("El resultado del cuadrado del número es igual a: ${cuadrado}");
  
}
