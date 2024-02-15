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
echo "Las variables son " . $X . $Y . $N . $M;

//La suma.
echo "la suma es " . ($X + $Y);
echo "la suma es " . ($N + $M);

//La resta.
echo "la resta es " . ($X - $Y);
echo "la resta es " . ($N - $M);

//El producte.
echo "la multi es " . ($X * $Y);
echo "la multi es " . ($N * $M);

//El mòdul
echo "el modulo es " . ($X % $Y);
echo "el modulo es " . ($N % $M);

//Per a totes les variables (X, Y, N, M):
//El doble de cada variable.
echo "el doble de la variable X es " . ($X * 2);
echo "el doble de la variable Y es " . ($Y * 2);
echo "el doble de la variable N es " . ($N * 2);
echo "el doble de la variable M es " . ($M * 2);

//La suma de totes les variables.
echo "la suma de todas las variables es " . ($X + $Y + $N + $M);

//El producte de totes les variables.
echo "La multiplicacion de la variable X es " . ($X * $X);
echo "La multiplicacion de la variable Y es " . ($Y * $Y);
echo "La multiplicacion de la variable N es " . ($N * $N);
echo "La multiplicacion de la variable M es " . ($M * $M);

/*Crea una funció Calculadora que entri dos nombres per paràmetre, 
i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.*/
function calculadora($a, $b, $mate) {
    if ($mate == "+") {
        $resultado = $a + $b;
    } if else ($mate == "-") {
        $resultado = $a + $b;
    } if else ($mate == "*") {
        $resultado = $a * $b;
    } else {
        $resultado = $a / $b;
    }
    return $resultado
}
echo "El resultado de la " . $mate . calculadora();
?>
</body>
</html>