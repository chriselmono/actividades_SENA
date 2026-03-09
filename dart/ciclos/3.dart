import 'dart:io';

void main(){
    
    int a = 0;
    
    int b = 1;
    
    print("Digite un número.");
    
    int n = int.parse(stdin.readLineSync()!);

    for(int i=0; i<=n; i++)
    {
        
        print("${a} "); 
        
        int c = a + b; 
        a=b; 
        b=c; 

    }
  
}
