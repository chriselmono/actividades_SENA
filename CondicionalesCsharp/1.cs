using System;


namespace Condicionales
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Digita el número que quieras: ");

            int num = int.Parse(Console.ReadLine());

            if(num %2 == 0) {
                Console.WriteLine("El número " + num + " es par");
            }
            else
            {
                Console.WriteLine("El número " + num + " es impar");
            }
        }
    }
}
