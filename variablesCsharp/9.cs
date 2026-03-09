using System;

namespace Variables
{
    internal class Nueve
    {
        public Nueve()
        {
            // Valor que pagará un cliente por compra de varios productos de la misma referencia 
            // referencia productos de hardware
            int mause = 215000;
            int teclado = 300000;
            int ram = 120000;
            int grafica = 2900000;
            int pantalla = 90000;
            
            int compra = (mause * 2) + teclado + grafica + pantalla + (ram * 3);

            double valoriva = compra * 16 / 100;
            double valortotal = compra + valoriva;

            Console.WriteLine("El valor total de su compra es " + valortotal + "COP.");
        }
    }
}
