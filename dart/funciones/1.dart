import 'dart:io';

 void maximo(){
     
     print("Digite su primer número: ");

    int num1 = int.parse(stdin.readLineSync()!);
    
    print("Digite su segundo número: ");

    int num2 = int.parse(stdin.readLineSync()!);
    
    print("Digite su tercer número: ");
    
    int num3 = int.parse(stdin.readLineSync()!);

    if(num1 >= num2 && num2 >= num3){ 
         print("Este es el número máximo de los tres: ${num1}");

    }else if(num1 <= num2 && num1 >= num3){ 
         print("Este es el número máximo de los tres: ${num2}");
    
    }else if(num1 <= num2 && num2 <= num3){ 
         print("Este es el número máximo de los tres: ${num3}");
    }else if(num1 >= num2 && num2 <= num3 && num1 >= num3){ 
         print("Este es el número máximo de los tres: ${num1}");
    }else if(num1 >= num2 && num3 >= num1){ 
         print("Este es el número máximo de los tres: ${num3}");
    }else if (num1 >= num2 && num2 <= num3 && num1 >= num3){
         print("Este es el número máximo de los tres: ${num1}");
    }

}


void main(){
   
maximo();   
   
}
