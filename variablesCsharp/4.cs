using System;

namespace Variables
{
    internal class Cuatro
    {
        public Cuatro() {
            //Calculadora de edad
            Console.WriteLine("Digite el año de nacimiento: ");
            int nacimiento = int.Parse(Console.ReadLine());

            Console.WriteLine("Digite el año actual: ");
            int actual = int.Parse(Console.ReadLine());

            int edad = actual - nacimiento;

            Console.WriteLine("La edad es: " + edad + " Años");
        }
    }
}
