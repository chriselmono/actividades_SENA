using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Switch
{
    internal class Menu
    {
        public Menu() {
            Console.WriteLine("Elige una opción:");
            Console.WriteLine("1. Imprimir Hola");
            Console.WriteLine("2. Imprimir Adiós");
            Console.WriteLine("3. Salir");

            //El usuario puede digitar la opción que desee
            int opcion = int.Parse(Console.ReadLine());

            //según la opción va a imprmir cualquiera de estos
            switch (opcion)
            {
                case 1:
                    Console.WriteLine("Hola");
                    break;
                case 2:
                    Console.WriteLine("Adiós");
                    break;
                case 3:
                    return; // salir del programa
                default:
                    Console.WriteLine("Opción no válida");
                    break;
            }

        }
    }
}
