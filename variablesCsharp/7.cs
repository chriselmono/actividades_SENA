using System;


namespace Variables
{
    internal class Siete
    {
        public Siete() {
            //área del cuadrado
            Console.WriteLine("Digite la longitud del lado del cuadrado: ");
            int longitud = int.Parse(Console.ReadLine());

            int area = longitud * longitud;

            Console.WriteLine("El área del cuadrado es igual a: " +  area);
        }
    }
}
