using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OperadoresAsignacion
{
    internal class Combinado
    {
        static void Combinados()
        {
            int edad = 25;
            bool esMayorDeEdad = (edad >= 18) && (edad < 60); 
            //true porque está entre el 28 y el 60

            int puntos = 80;
            bool aprobado = puntos >= 50; 
            //true porque los puntos son mayor a 50
        }
    }
}
