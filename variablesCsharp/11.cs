using System;

namespace Variables
{
    internal class Once
    {
        public Once()
        {
            //Raiz cuadrada sin funcion

            Console.WriteLine("Digite el número que quiera calcular: ");
            int numero = int.Parse(Console.ReadLine());

            double raiz = Math.Sqrt(numero);
            Console.WriteLine("El cuadrado del número es igual a " + raiz);
        }
    }
}
