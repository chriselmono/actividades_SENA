using System;


namespace Condicionales
{
    internal class Dos
    {
        public Dos() {
            Console.WriteLine("Ingrese su nombre: ");
            string nombre = Console.ReadLine();

            Console.WriteLine("Ingrese su edad");
            int edad = int.Parse(Console.ReadLine());

            if (edad < 1 || edad > 100)
            {
                Console.WriteLine("Señor(a) " + nombre + " ingrese una edad valida");
            }else if (edad >= 18 && edad <= 100) {
                Console.WriteLine("Señor(a) " + nombre + " usted es mayor de edad");
            }
            else
            {
                Console.WriteLine("Señor(a) " + nombre + "usted es menor de edad");
            }

        }
    }
}
