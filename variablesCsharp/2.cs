using System;

namespace Variables
{
    internal class _2
    {
        static void Dos()
            {
                Console.WriteLine("Digite un número: ");

                int num1 = int.Parse(Console.ReadLine());

                int resultado = num1 * num1;

                Console.WriteLine("El cuadrado de su número es: " + resultado);
            }
        
    }
}
