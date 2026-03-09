using System;


namespace Condicionales
{
    internal class Seis
    {
        public Seis()
        {
            Console.WriteLine("Escoge una opción :\r\n1.Área de un rectángulo.\r\n2.Área de un cuadrado.\r\n3.Área de un paralelogramo.\r\n4.Área de un rombo.\r\n5.Área de un trapecio.\r\n6.Área de un triángulo.\r\n7.Área de un triángulo equilatero.\r\n8.Área de un triángulo rectángulo.\r\n9.Área de un polígono regular.\r\nOpción: ");
            int opcion = int.Parse(Console.ReadLine());

            if (opcion == 1) {
                Console.WriteLine("Digita un lado A de su rectángulo: ");
                int a = int.Parse(Console.ReadLine());

                Console.WriteLine("Digite el lado B de su rectángulo: ");
                int b = int.Parse(Console.ReadLine());

                int area = a * b;

                Console.WriteLine("El área de su rectángulo es igual a " + area);
            } else if (opcion == 2) {
                Console.WriteLine("Digite el valor del lado de su cuadrado: ");
                int lado = int.Parse(Console.ReadLine());

                int area = lado * lado;

                Console.WriteLine("El área de su cuadrado es igual a " + area);
            } else if (opcion == 3) {
                Console.WriteLine("Digite el valor de la base del paralelogramo: ");
                int b = int.Parse(Console.ReadLine());

                Console.WriteLine("Digite el valor de la altura del paralelogramo: ");
                int h = int.Parse(Console.ReadLine());

                int area = b * h;

                Console.WriteLine("El valor del área del paralelogramo es igual a: " + area);
            } else if (opcion == 4) {
                Console.WriteLine("Digita el valor de la primera diagonal: ");
                int ac = int.Parse(Console.ReadLine());

                Console.WriteLine("Digite el valor de la segunda diagonal: ");
                int bd = int.Parse(Console.ReadLine());
                int area = (ac * bd) / 2;

                Console.WriteLine("El valor del área del rombo es igual a: " + area);
            }else if (opcion == 5){
                Console.WriteLine("Digite el primer lado del trapecio: ");
                int a = int.Parse(Console.ReadLine());

                Console.WriteLine("Digite el segundo lado del trapecio: ");
                int b = int.Parse(Console.ReadLine());

                Console.WriteLine("Digite la altura del trapecio: ");
                int h = int.Parse(Console.ReadLine());

                int area = ((a + b)/ 2) * h;

                Console.WriteLine("El área del trapecio es igual a: " + area);
            }else if (opcion == 6){
                Console.WriteLine("Digite el valor de la base del triángulo: ");
                int b = int.Parse(Console.ReadLine());

                Console.WriteLine("Digite el valor de la altura del triángulo: ");
                int h = int.Parse(Console.ReadLine()); 
                int area = (b * h) / 2;

                Console.WriteLine("El área del triángulo es igual a: " + area);
            }else if (opcion == 7){
                Console.WriteLine("Digite el valor del lado del triángulo: ");
                int a = int.Parse(Console.ReadLine());
                
                double area = (Math.Pow(a, 2) * Math.Sqrt(3))/ 4;

                Console.WriteLine("El área del triángulo es igual a: " + area);
            }else if (opcion == 8){
                Console.WriteLine("Digite el valor del primer cateto: ");
                int ca = int.Parse((Console.ReadLine()));
                Console.WriteLine("Digite el valor del segundo cateto: ");
                int co = int.Parse((Console.ReadLine()));
                double area = (ca * co) / 2;

                Console.WriteLine("El área del triángulo rectángulo es igual a: " + area);
            }else if (opcion == 9){
                Console.WriteLine("Digite el valor del perimetro del poligono regular: ");
                int p = int.Parse((Console.ReadLine()));

                Console.WriteLine("Digite el valor de la apotema: ");
                int ap = int.Parse((Console.ReadLine()));

                double area = (p * ap)  / 2;
                Console.WriteLine("El valor del área del poligono regular es igual a: " + area);
            }else
            {
                Console.WriteLine("Opción no valida");
            }
        }
    }
}
