<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http.equiv="X-UA-Compatible" content= "IE=edge">
        <meta name="viewport" content="width=device.width, initial.scale=1.0">
        <tittle>Prueba HTML con PHP embebido.</tittle>
    </head>
    <body>
        <h1>Trabajando con variables.</h1>
        <?php
            $varTexto="Hola"; //Cadena de texto.
            $varEntero=123; //Entero.
            $varBoolean=true; //Booleano.
            $varFloat=1.2; //Decimal o Float.
            $varArray= array ("1", "2"); //Array.
/*Para usar un salto de carro y ser mostrado en pantalla, usaremos <b/>r> */
echo "Variable de tipo cadena de texto". $varTexto . "<br/>";
echo (is_bool($varBoolean))."<br/>";
echo (is_bool($varTexto))."<br/>";
echo ("Variable de tipo entero: ". $varEntero . "<br/>");
echo "Variable de tipo boolean: ". $varBoolean. "<br/>";
echo "Variable de tipo float: " . $varFloat . "<br/>";
echo "Variable de tipo compuesto: ";
    print_r($varArray); //La funcion print_r sirve para imprimir el contenido de un array.
    echo "<br/>" . "la primera posicion del array es ". $varArray[1]. "<br/>";
        ?>
    </body>
</html>