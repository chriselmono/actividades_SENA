using System;


namespace Condicionales
{
    internal class Cuatro
    {
        public Cuatro() {
            Console.WriteLine("Digita el primer número: ");
            int num1 = int.Parse(Console.ReadLine());

            Console.WriteLine("Digita el segundo número: ");
            int num2 = int.Parse(Console.ReadLine());

            if (num1 < num2)
            {
                Console.WriteLine(num1 + " Es menor que " + num2);
            }
            else if (num1 > num2)
            {
                Console.WriteLine(num1 + " es mayor que " + num2);
            }
            else
            {
                Console.WriteLine("Los números son iguales");
            }
        }
    }
}
