<!-- Definimos las variables pero no hacemos que muestre los valores -->

<?php
$numero = 8;
$nombre = "Diego";
$altura =1.72;

?>

<!-- Definimos una variable más, y ahora hacemos que muestre el valor de la variable con 'echo' -->

<?php
$edad;

$edad = 22;

echo $edad;

?>

<!-- Lo mismo que la anterior pero diferente variable y valor -->

<?php

$variable = 8754;

echo $variable;

?>

<!-- definimos más variables sin que se muestre en pantalla el valor de cada una -->
<!-- acá se muestra como los nombres de las variables permiten caracteres alfanumericos -->

<?php

$variable_1 = 8754;
$x = "Punto x";
$nombre_persona = "Andres";
$_edad = 78;
$_1apellido = "Carmelo";
$NUMEROPAR = 46;

?>

<!-- acá mostramos las variables en pantalla -->
<!-- Se muestra como las variables se distinguen con mayus y minuscula -->

<?php

echo $NOMBRE = "Diego";
echo $nombre = "Alejandro";

?>

<!-- Se muestra otra variable, 'this' es una variable que no puede ser asignada, por eso muestra error -->

<?php

$this = "Esto es PHP";
echo $this;

?>

<!-- Vamos a ver como el valor de una variable es reemplazado sin importar el tipo -->

<?php

$nombre = "Diego";
$nombre = "Alex";

echo $nombre;

?>

<!-- Otro ejemplo de lo anterior-->

<?php

$x = "politécnico de Colombia";
$x = 43;

echo $x;

?>

<!-- Se muestra en los siguiente otra forma de asignar variables-->
<?php 

$nombre = "Ana";
$name = &$nombre;  //se convierte en un alias, para eso siempre empezar con '&', eso quiere decir que los cambios afectan a la original y viceversa

$nombre = "Andrea";

echo $nombre;
echo $name; //envía el mismo valor porque si se afecta uno afecta el otro

?>

<!-- Aqui vamos a mostrar como esto no permite valores como aperaciones o numericos en los siguientes dos ejemplos -->
<!-- ejemplo 1 -->

<?php

$nombre = "Ana";
$name = &$nombre;

$name = &"84"; 


echo $nombre;
echo $name;


// En lo anterior va a generar error
?>

<?php 

$nombre = "Ana";
$name = &$nombre;

$name = &(2+4);

echo $nombre;
echo $name;

// Al igual que acá, error
?>

<!-- variables predefinidas: $GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_REQUEST
$_SESSION
$_ENV
$_COOKIE -->

<!-- Tres ambitos de variables diferente:
Locas
Global
Estático -->

<!-- Ámbito global - Ámbito Local -->

<?php 

$x = 5;

function prueba() {
    echo "Variable global: " $x;
}
prueba();

//genera error porque esa funcion es global y aquí solicita la variable '$x' como ámbito local

?>

<?php 

function prueba() {
    $x = 5;
    echo "variable: $x";
}
prueba();

//Se pueden tener variables locales con mismo nombre en diferntes funciones, porque las variables locales son reconocidas por la funcion que se declaran

?>

<!-- variable global -->

<?php 

$edad = 41;

function prueba() {
    global $edad;
    $edad = 22;
}
prueba();

echo $edad;

//declaración de ámbito global en un ámbito local
?>

<!-- otro ejemplo de '$GLOBALS' -->

<?php 

$altura =141;

function prueba(){
    $GLOBALS['altura'] = 172;
}
prueba();

echo $altura; 

//con '$GLOBALS' se obtiene los mismos resultado que con 'global'

?>

<!-- variable estática, palabra clave 'static' -->

<?php 

function prueba() {

    static $x = 0;
    echo $x;
    $x++;
}
prueba();
prueba();
prubea();

//'$x' al tene variable static retiene la información en tiempo de ejecución

?>

<!-- Si la propiedad static no estuviera presente -->

<?php 

function prueba() {

    $x = 0;
    echo $x;
    $x++;
}

prueba();
prueba();
prueba();

//como no está la variable 'static' se repetira tres veces el mismo '0'

?>

<!-- Variables constantes, se define con 'const' y con 'define'-->

<?php 

const ESTUDIANTE = "Stiven Tangarife Serna";
echo ESTUDIANTE;

?>

<!-- segunda forma -->

<?php 

define("PROFESOR", "Diego Alejandro palacio Valencia");
echo PROFESOR;

//se puede no utilizar constantes, ya que las constantes definidas se reemplazan por variables

?>

<!-- las constantes son constantes, no cambian, las variables pueden cambiar o variar (redundante) -->

<?php 

const ESTUDIANTE = "Stiven Tangarife Serna";
 echo ESTUDIANTE;
 
 const ESTUDIANTE = "Juan Rivera";

 //Genera error ya que no se puede cambiar, porque es una constante
?>

<!-- dos formas para almacenar correo electronico -->
<!-- forma 1 -->

<?php 

$nombre = "Diego Alejandro Palacio Valencia";
$correo = "diegovalencia@politecnicodecolombia.edu.co";

echo $nombre " " $correo;

?>

<!-- forma 2 -->

<?php 

$nombre = "Diego Alejandro Palacio Valencia";
$correo = "diegovalencia@politecnicodecolombia.edu.co";

echo "$nombre $correo";

?>
