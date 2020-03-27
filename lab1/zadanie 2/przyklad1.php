<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    </head>
    <body>
        <?php if(isset($_POST['wyslij'])): ?>
            <table>
                <tr>
                    <th>Nazwa pola</th>
                    <th>Wartość</th>
                </tr>
                
                <?php foreach($_POST as $klucz => $wartosc): ?>
                <tr>
                    <td><?=$klucz ?></td>
                    <td><?=$wartosc ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </body>
</html>