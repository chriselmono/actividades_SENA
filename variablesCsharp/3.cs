using System;

namespace Variables
{
    internal class Tres
    {
        public Tres() {
            Console.WriteLine("Digite la velocidad en Km/h: ");
            int velocidad = int.Parse(Console.ReadLine());

            Console.WriteLine("Digite el tiempo en horas: ");
            int tiempo = int.Parse(Console.ReadLine());

            int distancia = velocidad * tiempo;

            Console.WriteLine("El resultado de X es igual a " + distancia + "Km");
        }
    }
}
