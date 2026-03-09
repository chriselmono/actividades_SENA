import 'dart:io';
import 'dart:math';

void reversa() {
    
  String cadena = "1234abcd"; //ejemplo, se puede cambiar
  String reversa = cadena.split('').reversed.join('');
  print(reversa);
  
}


void main(){
    
    reversa();
   
}
