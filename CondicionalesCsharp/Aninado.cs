using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Condicionales
{
    internal class Aninado
    {
        public Aninado() {
            int number = 10;
            //anidado se refiere a multiples condicionales
            //en este se mira si es positivo o negativo
            if(number > 0)
            {
                Console.WriteLine("El número es positivo");
                //Además, también si es par o impar
                if(number % 2 == 0)
                {
                    Console.WriteLine("El número es par.");
                } else
                {
                    Console.WriteLine("El número es impar");
                }
            } else
            {
                Console.WriteLine("El número es negativo");
            }
        
        }
    }
}
