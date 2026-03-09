using System;

namespace Variables
{
    internal class Cinco
    {
        public Cinco() {
            //20% de cualquier digito
            Console.WriteLine("Digite un número: ");
            int num = int.Parse(Console.ReadLine());

            double resultado = num * 0.2;

            Console.WriteLine("El 20% de " + num + " es igual: " + resultado);
        }
    }
}
