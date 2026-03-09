import 'dart:io';

void main() {
  print("Calcular el 20% de cualquier número");

  print("Digite un número: ");

  int num1 = int.parse(stdin.readLineSync()!);

  double total = num1 * 0.2;

  print("El 20% de ${num1} es igual a ${total}");
  
}
