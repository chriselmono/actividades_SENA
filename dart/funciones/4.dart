import 'dart:io';
import 'dart:math';

void mult() {
    
  List<int> numbers = [8, 2, 3, -1, 7];
  
  int producto = 1;
  
  for (int num in numbers) {
      
    producto *= num;
  }
  print(producto); 
  
}


void main(){
   
mult();
   
}
