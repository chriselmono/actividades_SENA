using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Condicionales
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int number = 5;

            //Es una forma simple de hacer condicional sin if-else
            string result = number > 0 ? "El número es positivo. " : "El número es negativo o cero.";
            Console.WriteLine(result);
        }
    }
}
