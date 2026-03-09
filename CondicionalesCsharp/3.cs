using System;


namespace Condicionales
{
    internal class Tres
    {
        public Tres() {
            Console.WriteLine("Digite un número: ");
            int num = int.Parse(Console.ReadLine());

            if (num > 0) {
                Console.WriteLine("El número digitado es positivo");
            }else if (num < 0) {
                Console.WriteLine("El número digitado es negativo");
            }
            else
            {
                Console.WriteLine("El número es 0");
            }
        }
    }
}
