using System;


namespace Condicionales
{
    internal class Cinco
    {
        public Cinco() {
            Console.WriteLine("Digite las 5 notas dadas por el profesor: ");
            Console.WriteLine("Nota 1: ");
            int not1 = int.Parse(Console.ReadLine());

            Console.WriteLine("Nota 2: ");
            int not2 = int.Parse(Console.ReadLine());

            Console.WriteLine("Nota 3: ");
            int not3 = int.Parse(Console.ReadLine());

            Console.WriteLine("Nota 4: ");
            int not4 = int.Parse(Console.ReadLine());

            Console.WriteLine("Nota 5: ");
            int not5 = int.Parse(Console.ReadLine());
            
            double promedio = (not1 + not2 + not3 +not4 + not5) / 5;

            if (promedio >= 3.0){
                Console.WriteLine("Felicitaciones, has aprobado, tu promedio es de " + promedio);
            }else
            {
                Console.WriteLine("Has repobrado, sigue esforzandote, tu promedio es de " + promedio);
            }
        }
    }
}
