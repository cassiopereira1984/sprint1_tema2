<html>
<header>
    <title>Sprint1 Tema2</title>
</header>
<body>
<?php

// EJERCICIO1 Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
integer
double 
string 
boolean

//Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.
define("nombre", "Cassio");

echo "Mi nombre es" . nombre ", gracias.";

//EJERCICIO 2 Imprimeix per pantalla "Hello, World!" utilitzant una variable
$hello = "Hello World";
echo $hello;

//Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
echo strtoupper($hello);

//Imprimeix per pantalla la mida (longitud) de la variable
echo strlen($hello);

/*EJERCICIO 3 Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i 
assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:*/
integer X, Y = 4, 5;
double N, M = 6, 7;


?>
</body>
</html>