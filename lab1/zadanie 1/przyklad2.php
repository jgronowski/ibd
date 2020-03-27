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
                    for($i = 0; $i < 10; $i++) {
                        echo "<td>Tabela #$i</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <?php for($i = 0; $i < 10; $i++): ?>
                        <td>Tabela #<?=$i ?></td>
                    <?php endfor; ?>
                </tr>
            </tbody>
        </table>

        

    </body>
</html>