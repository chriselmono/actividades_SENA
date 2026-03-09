using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Condicionales
{
    internal class Else
    {
        static void Negativo()
        {
            //número negativo
            int number = -1;

            //Al ser un número negativo va a imprimir que no es positivo
            if (number > 0)
            {
                //no cumple con la condición, no la imprime
                Console.WriteLine("El número es positivo.");
            }
            else
            {
                //Como no pasa la condición salta e imprime esto
                Console.WriteLine("El número no es positivo.");
            }

        }
    }
}
