using System;

namespace Variables
{
    internal class Seis
    { 
        public Seis() {
            //calcular el 30%, 60% y 90%
            Console.WriteLine("Ingrese cualquier digito: ");
            int digito = int.Parse(Console.ReadLine());

            double resultado1 = digito * 0.3;
            double resultado2 = digito * 0.6;
            double resultado3 = digito * 0.9;

            Console.WriteLine("Tu digito ha sido " + digito + ", el 30% de es igual a " + resultado1);
            Console.WriteLine("El 60 % de ese digito es " + resultado2);
            Console.WriteLine("El 90 % de ese digito es " + resultado3);
        }
    }
}
