<?php
require_once 'src/Ksiazki.php';
require_once 'src/Db.php';

$ostat = $ksiazki->pobierzBestsellery();

?>

<div class="col-md-2">
	<h1>Bestsellery</h1>

    <ul>
        <?php foreach($ostat as $ks): ?>
            <li class="list-group-item"
                <center>
                    <?php if(!empty($ks['zdjecie'])): ?>
                        <a href="ksiazki.szczegoly.php?id=<?=$ks['id']?>"><img src="zdjecia/<?=$ks['zdjecie']?>" alt="<?=$ks['tytul']?>" class="img-thumbnail" /></a>
                    <?php else: ?> brak zdjęcia
                    <?php endif; ?>
                </center>
                <a href="ksiazki.szczegoly.php?id=<?=$ks['id']?>">
                    <p>
                        <?=$ks['tytul']?>
                    </p>
                    <?=$ks['imie']?> <cite title="Source Title"><?=$ks['nazwisko']?></a></li>		<br>
        <?php endforeach; ?>
    </ul>
</div>