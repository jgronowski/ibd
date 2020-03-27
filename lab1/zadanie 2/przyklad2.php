<?php
    $liczbaWierszy = empty($_POST['liczba_wierszy']) ? 2 : $_POST['liczba_wierszy'];
    $liczbaKolumn = empty($_POST['liczba_kolumn']) ? 2 : $_POST['liczba_kolumn'];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    </head>
    
    
    <?php if(isset($_POST['kolor_tla'])): ?>
        <body style="background-color: <?=$_POST['kolor_tla'] ?>">
    <?php: else: ?>
        <body>
    <?php endif; ?>
            
    <table border="1">
        <?php for($i = 0; $i < $liczbaWierszy; $i++): ?>
                <?php if(isset($_POST['colors']) && $_POST['colors'] == 'Yes' && $i%2==0) {
                    $color = "Yellow";
                }else{
                $color = $_POST['kolor_tla'];
            }?>
            <tr>
                <?php for($j = 0; $j < $liczbaKolumn; $j++): ?>
                        <td style="background-color: <?=$color ?>"><?=$i ?>.<?=$j ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>