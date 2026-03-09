using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Condicionales
{
    internal class ElseIf
    {
        public ElseIf() { 
            int number = 0;

            //Ahora vemos un else if, o sea 2 condiciones y una excepción
            if (number > 0)
            {
                Console.WriteLine("El número es positivo.");
            }
            else if (number < 0)
            {
                Console.WriteLine("El número es negativo");
            }
            else
            {
                Console.WriteLine("El número es igual a 0");
            }
        }
    }
}
