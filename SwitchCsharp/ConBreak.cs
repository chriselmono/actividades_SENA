using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Switch
{
    internal class ConBreak
    {
        public ConBreak() {
            int x = 1;

            //Cuando hay break no hay error y deja ejecutar
            switch (x)
            {
                case 1:
                    Console.WriteLine("Uno");
                    break;
                case 2:
                    Console.WriteLine("Dos");
                    break;
                case 3:
                    Console.WriteLine("Tres");
                    break;
            }
        }
    }
}
