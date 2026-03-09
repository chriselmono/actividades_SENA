import 'dart:io';

void main() {
  print("Calcular el área de un cuadrado");

  print("Digite la longitud del cuadrado: ");

  int long = int.parse(stdin.readLineSync()!);

  int area = long * long;

  print("El área del cuadrado con longitud ${long} es igual a ${area}");
}
