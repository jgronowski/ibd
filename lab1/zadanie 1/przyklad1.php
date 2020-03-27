<?php
    $zmiennaInt = 51;
    $zmiennaFloat = 43.2;
    $zmiennaString = "przykładowy tekst";
    $tekstZawierajacyZmienne = "integer: $zmiennaInt, float: $zmiennaFloat";

    $tablica = ['red', 'green', 'blue'];
    $tablica[] = 'yellow'; // dodawanie elementu na koniec tablicy
    $tablica[] = 'orange';
    
    $tablicaAsoc = ['klucz1' => 'wartosc1', 'klucz2' => 'wartosc2'];
    $tablicaAsoc['klucz3'] = 'wartosc3';
    
    var_dump($tablicaAsoc);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    </head>
    <body>
        <p>Paragraf statyczny</p>
        
        <?php
            echo "<p>Paragraf dynamiczny</p>";
        ?>
    </body>
</html>