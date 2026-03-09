import 'dart:io';
import 'dart:math';

void main() {
    
    //solicitamos al usuario un número del 1 al 20 para una operación
  print("Seleccione la opción de conversión: 1. Fahrenheit a Celsius.");
  print("2. Celsius a Fahrenheit.");
  print("3. Fahrenheit a Kelvin.");
  print("4. Fahrenheit a rankine");
  print("5. Fahrenheit a Réaumur."); 
  print("6. Celsius a Kelvin."); 
  print("7. Celsius a Rankine."); 
  print("8. Celsius a Réaumur."); 
  print("9. Kelvin a Celsius.");
  print("10. Kelvin a Fahrenheit");
  print("11. Kelvin a Rankine.");
  print("12. Kelvin a Réaumur.");
  print("13. Rankine a Celsius.");
  print("14. Rankine a Farenheit.");
  print("15. Rankine a Kelvin.");
  print("16. Rankine a Réaumur.");
  print("17. Réaumur a Celsius.");
  print("18. Réaumur a Farenheit.");
  print("19. Réaumur a Kelvin.");
  print("20. Réaumur a Rankine.");
 
  
  int opcion = int.parse(stdin.readLineSync()!);
  
  print("Digite la temperatura a convertir");
  
  double temp = double.parse(stdin.readLineSync()!);
  

  if(opcion == 1){
      
      double c = (temp - 32) / 1.8;
      
      print("La temperatura en Celsius es: ${c} °C");
      
  }else if(opcion == 2){
      
      double f = (temp * 1.8) + 32;
      
      print("La temperatura en Fahrenheit es: $f °F");
      
  }else if(opcion == 3){
      
      double k = (temp + 459.67) / 1.8;
      
      print("La temperatura en Kelvin es: $k °K");

      
  }else if(opcion == 4){
      
      double ra = temp + 459.67;
      
      print("La temperatura en Kelvin es: $ra °Ra");
      
  }else if (opcion == 5){
      
      double re = (temp -32 ) / 2.25;
      
      print("La temperatura en Réaumur es: $re °Re");
      
  }else if(opcion == 6){
      
      double k = temp + 273.15;
      
      print("La temperatura en Kelvin es: $k °K");
      
  }else if(opcion == 7){
      
      double ra = (temp * 1.8) + 32 + 469.67;
      
      print("La temperatura en Rankine es: $ra °Ra");

      
  }else if(opcion == 8){
      
      double re = temp * 0.8;
      
      print("La temperatura en Réaumur es: $re °Re");

      
  }else if( opcion == 9){
      
      double c = temp - 273.15;
      
      print("La temperatura en Celsius es: $c °C");
      
  }else if (opcion == 10) {
      
      double f = (temp * 1.8) - 459.67;
      
      print("La temperatura en Fahrenheit es: $f °F");
      
  }else if (opcion == 11) {
    double ra = temp * 1.8;
    
    print("La temperatura en Rankine es: $ra °Ra");
      
      
  } else if (opcion == 12) {
      
      double re = (temp - 273.15) * 0.8;
      
      print("La temperatura en Réaumur es: $re °Re");
      
  }else if (opcion == 13) {
      
      double c = (temp - 32 - 459.67) / 1.8;
      
      print("La temperatura en Celsius es: $c °C");
      
      
  }else if (opcion == 14) {
      
      double f = temp - 459.67;
      
      print("La temperatura en Fahrenheit es: $f °F");
      
      
  }else if (opcion == 15) {
      double k = temp / 1.8;
      
      print("La temperatura en Kelvin es: $k °K");
      
      
  }else if (opcion == 16) {
      double re = (temp - 32 - 459.67) / 2.25;
      print("La temperatura en Réaumur es: $re °Re");
      
  }else if (opcion == 17) {
      
      double c = temp * 1.25;
      
      print("La temperatura en Celsius es: $c °C");
      
      
  }else if (opcion == 18) {
      
      double f = (temp * 2.25) + 32;
      
      print("La temperatura en Fahrenheit es: $f °F");
      
      
  }else if (opcion == 19) {
      
      double k = (temp * 1.25) + 273.15;
      
      print("La temperatura en Kelvin es: $k °K");
      
      
  }else if (opcion == 20) {
      
      double ra = (temp * 2.25) + 32 + 459.67;
      
      print("La temperatura en Rankine es: $ra °Ra");
      
  }else{
      
      print("Opción no valida");
      
  }
}
