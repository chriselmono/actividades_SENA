using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Switch
{
    internal class Program
    {
        static void Main(string[] args)
        {
            object obj = "Hola, mundo!";

            //Compara si 'obj' es de un tipo u otro
            switch (obj)
            {
                case int i:
                    Console.WriteLine($"obj es un entero con valor {i}");
                    //i es int o entero
                    break;
                case string s:
                    Console.WriteLine($"obj es una cadena con valor '{s}'");
                    //s es string o cadena
                    break;
                case bool b:
                    Console.WriteLine($"obj es un booleano con valor {b}");
                    //b es bool, o true o false
                    break;
                default:
                    Console.WriteLine($"obj es de tipo {obj.GetType().Name}");
                    //Si es de otro tipo imprime esto
                    break;
            }
        }
    }
}
