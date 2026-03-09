import 'dart:io';

void main() {
  print("Calcular la edad cumplida o a cumplir en el año");

  print("Digite en que año estás: ");

  int ano = int.parse(stdin.readLineSync()!);
  
  print("Digite en que año nació: ");
  
    int nacio = int.parse(stdin.readLineSync()!);

  int anos = ano - nacio;

  print("Si estamos en el año ${ano} y naciste en el año ${nacio}, entonces tienes ${anos} años");
  
}
