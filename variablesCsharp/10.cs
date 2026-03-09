using System;

namespace Variables
{
    internal class Diez
    {
        public Diez()
        {
            //Salario de un empleado 
            //digitar primero el valor de salario por cada hora trabajada, teniendo en cuenta que son 8 horas laborales

            Console.WriteLine("Digite el valor de salario por cada hora laboral: ");
            int dia = int.Parse(Console.ReadLine());
            
            int salariodia = dia * 8;

            Console.WriteLine("Cantidad de días que el empleado trabajó en el mes: ");
            int dias = int.Parse(Console.ReadLine());
            
            int salariomes = salariodia * dias;
            
            //descontar 10% pension y 15% salud
            double pension = salariomes * 0.1;
            double salud = salariomes * 0.15;
            
            double salariototal = salariomes - pension - salud;
            
            Console.WriteLine("El salario total del empleado teniendo en cuenta salud y pension es $" + salariototal +"COP");
        }
    }
}
