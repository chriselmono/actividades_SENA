using System;

namespace Variables
{
    internal class Ocho
    {
        public Ocho() {
            //Promedio de 5 números
            Console.WriteLine("Digite el primer número: ");
            int num1 = int.Parse(Console.ReadLine());

            Console.WriteLine("Digite el segundo número: ");
            int num2 = int.Parse(Console.ReadLine());

            Console.WriteLine("Digite el tercer número: ");
            int num3 = int.Parse(Console.ReadLine());

            Console.WriteLine("Digite el cuarto número: ");
            int num4 = int.Parse(Console.ReadLine());

            Console.WriteLine("Digite el quinto número: ");
            int num5 = int.Parse(Console.ReadLine());

            int suma = num1 + num2 + num3 + num4 + num5;
            int promedio = suma / 5;

            Console.WriteLine("El promedio de los números es igual a " + promedio);


        }
    }
}
