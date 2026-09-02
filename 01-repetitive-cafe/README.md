# 01 — Repetitive Cafe

Proyecto de práctica de Codecademy. Genero la página de menú de una cafetería
usando bucles en lugar de escribir el marcado a mano.

**Concepto:** bucles en plantillas PHP
**Tiempo estimado:** 30 min
**Ejecución:** `php -S localhost:8000` desde esta carpeta

## Qué hace

Este proyecto renderiza un menú sencillo de cafetería utilizando PHP incrustado en HTML.

El menú contiene tres secciones:

Bebidas con precios individuales.
Pasteles con un precio fijo de 2 € cada uno.
Platos principales sin precio individual.

El proyecto se ha realizado como ejercicio práctico de PHP centrado en el uso de arrays y estructuras de repetición.

## Qué concepto practica

Arrays asociativos

La variable $drinks utiliza un array asociativo porque cada bebida necesita estar relacionada con un precio concreto.

$drinks = [
    "Café con leche" => 1.50,
    "Té" => 1.00,
    "Café solo" => 1.20,
];

El nombre de la bebida es la clave y el precio es el valor.

Esto permite que foreach pueda acceder a ambos datos:

foreach ($drinks as $drink => $price) 
Arrays indexados

Las variables $pastries y $food utilizan arrays indexados porque únicamente necesitamos almacenar una lista de elementos.

$pastries = [
    "Tarta de zanahoria",
    "Brownie de chocolate",
    "Tarta de nueces",
];

PHP asigna automáticamente un índice numérico a cada elemento, empezando por 0.

foreach

Utilizo foreach para recorrer el array asociativo $drinks.

Esta estructura permite acceder directamente tanto a la clave como al valor, por lo que resulta adecuada para mostrar el nombre de la bebida junto con su precio.

for

Utilizo for para recorrer el array $pastries mediante sus índices numéricos.

El bucle comienza en el índice 0 y continúa mientras el índice sea menor que el número de elementos del array.

do...while

Utilizo do...while para recorrer el array $food.

Esta estructura ejecuta primero el contenido del bucle y después comprueba la condición.

Por tanto, un do...while siempre ejecuta el bloque al menos una vez.

Esto supone una limitación en este caso: si el array estuviera vacío, el código podría intentar acceder a un elemento que no existe.

Para recorrer un array, foreach sería generalmente una opción más sencilla y segura.


## Qué me costó

La principal dificultad ha sido entender las diferencias entre las tres estructuras de repetición.

Inicialmente intenté combinar foreach y do...while, pero cada estructura resuelve un problema diferente.

foreach está diseñado para recorrer directamente los elementos de un array, mientras que for y do...while requieren gestionar explícitamente el índice cuando trabajamos con un array indexado.

Otra dificultad ha sido entender cómo combinar PHP con HTML. PHP controla la lógica de repetición y HTML define la estructura que se genera para cada elemento.

## Qué haría distinto

Elegiría la estructura de repetición teniendo en cuenta la estructura de los datos y el resultado que necesito obtener, en lugar de utilizar siempre el mismo tipo de bucle.

Por ejemplo:

Utilizaría foreach cuando necesito recorrer directamente los elementos de un array.
Utilizaría for cuando necesito controlar explícitamente el índice numérico.
Utilizaría do...while cuando necesito garantizar que el código se ejecute al menos una vez.

También tendría en cuenta si el array puede estar vacío antes de utilizar do...while.

Este proyecto me ha ayudado a comprender que la estructura de los datos y la estructura de control que utilizamos para trabajar con ellos están relacionadas.