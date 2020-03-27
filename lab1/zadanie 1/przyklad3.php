<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    </head>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
    <body>
    <table>
        <tbody>
        <tr>
        <?php
            $jezyki = [
                'Kolor 1' => 'Green', 'Kolor 2' => 'Grey', 'Kolor 3' => 'Blue',
                'Kolor 4' => 'Brown', 'Kolor 5' => 'Pink', 'Kolor 6' => 'Cyan',
                'Kolor 7' => 'Black'
            ];

            foreach($jezyki as $klucz => $wartosc) {
                echo "<td>$wartosc</td>";
            }
        ?>
        </tr>
        </tbody>
    </table>
        
        <?php foreach($jezyki as $klucz => $wartosc): ?>
            <ul><li style="color:<?=$wartosc ?>"><?=$klucz ?>: <?=$wartosc ?></li></ul>
        <?php endforeach; ?>
    </body>
</html>