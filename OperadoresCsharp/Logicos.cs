using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OperadoresAsignacion
{
    internal class Logicos
    {
        static void Logic()
        {
            bool a = true;
            bool b = false;

            bool andResult = a && b; //False
            bool orResult = a || b; //True
            bool notResult = !a; //False
        }
    }
}
