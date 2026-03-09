import 'dart:io';

void main() {
  print("Calcular el 30%, 60% y 90% de cualquier número");

  print("Digite un número: ");

  int num1 = int.parse(stdin.readLineSync()!);

  double num2 = num1 * 0.3;
  double num3 = num1 * 0.6;
  double num4 = num1 * 0.9;

  print("El 30% de ${num1} es igual a ${num2}");
  
  print("El 60% de ${num1} es igual a ${num3}");  
  
  print("El 90% de ${num1} es igual a ${num4}");
}
