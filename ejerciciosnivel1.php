<html>
<header>
    <title>Sprint1 Tema2</title>
</header>
<body>
<?php

// EJERCICIO1 Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
$integer = 12;
$double = 34.54;
$string = "Hola mundo":
$boolean = false;

echo $integer . $double . $string . $boolean;

//Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.
define("nombre", "Mi nombre es Cassio, gracias");
$titulo = ucwords(nombre);

echo $titulo;

//EJERCICIO 2 Imprimeix per pantalla "Hello, World!" utilitzant una variable
$hello = "Hello World";
echo $hello;

//Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
echo strtoupper($hello);
//echo strtolower($hello);

//Imprimeix per pantalla l'string en ordre invers de caràcters
echo strrev($hello);

//Imprimeix per pantalla la mida (longitud) de la variable
echo strlen($hello);

/*o	Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per 
pantalla la concatenació de tots dos strings.*/
$curso = "Aquest és el curs de PHP.";
echo $hello . $curso;

/*EJERCICIO 3 Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i 
assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:*/

$X, $Y = 4, 5;
$N, $M = 6.5, 7.5;

//El valor de cada variable.
echo $X . $Y . $N . $M
//La suma.
echo $X + $Y
echo $N + $M

//La resta.
echo $X - $Y
echo $N - $M

//El producte.
echo $X * $Y
echo $N * $M

//El mòdul
echo $X % $Y
echo $N % $M



?>
</body>
</html>