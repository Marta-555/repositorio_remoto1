<p>1.Investigar generacion de numero aleatorio en php (entre 1 y 100).<br>
2.Rellenar un array de 20 casillas, num del 1 al 100 aleatorios, sin que se repita ninguno.<br>
3.Cuando este relleno, pintar por pantalla el array</p>
4.Buscar alguna funcion que permita buscar un valor en el array(para saber si existe el número o no)</p>

<p>Nota: 
    <ul>
        <li>Realizar un array vacio que iremos rellenando.</li>
        <li>Podemos hacer una funcion en la que se incluye random.</li>
        <li>Funcion count() dice cuantos elementos tiene un array.</li>
    </ul>
</p>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <?php

        //https://www.anerbarrena.com/php-array-search-4831/

        function aleatoriosUnicos($min, $max, $cantidad){
            $numeros = range($min, $max);
            shuffle($numeros);
            return array_slice($numeros, 0, $cantidad);
        }

       // function 
    ?>

    <?php
        //Con función
        $aleatorios = aleatoriosUnicos(1, 100, 20);
        //print_r($aleatorios);
        sort($aleatorios); 
        var_dump($aleatorios);


        
        echo "<br><br>";
        
        //Con función ya creada
        //print_r(array_rand(range(1, 100), 20));


        //Buscamos el valor en el array
        /*if(in_array("33", $aleatorios)){
            $indice = array_search(33, $aleatorios, false);
            echo "El número 33 existe.<br> Se encuentra en el índice: ". $indice;
        } else {
            echo "El número 33 no existe";
        }
        echo "<br>";

        echo "El array tiene ". count($aleatorios) . " casillas";*/

       
    ?>

    <?php
    //Otra opción
        $a = array();

        while(count($a)<20){
          $n= random_int(1, 100);
         if(!in_array($n, $a)){  //Si no está en el array lo inserta
            $a[] = $n;
            }
       
        } 

     sort($a); //Ordenar el array

     var_dump($a);
    
    ?>

    <?php
        /*Hacer una funcion que simule el var_dump*/
        
        $direccion= $_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'];       
        $tamano = count($a);
       
      
        print $direccion."<br><b>".gettype($a)."</b> <i>(size =".$tamano.")</i>";

        foreach($a as $clave => $valor){
            print $clave. $valor;
        }



       
    ?>

</body>
</html>






