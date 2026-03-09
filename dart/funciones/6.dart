import 'dart:io';
import 'dart:math';

void factorial() {
    
    print("Digite un número NO negativo.");
    
    int num = int.parse(stdin.readLineSync()!);
    
    int factorial = 1;
    
    for(int i = 2; i<=num; i++){
        
        factorial *= i;
        
    }
  
  print("${factorial}");
  
}


void main(){
    
    factorial();
   
}
