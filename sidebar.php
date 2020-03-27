<?php
require_once 'src/Ksiazki.php';
require_once 'src/Db.php';

$ostat = $ksiazki->pobierzBestsellery();

?>

<div class="col-md-2">
	<h1>Bestsellery</h1>
    <?php foreach($ostat as $ks): ?>
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <h6 class="d-inline-block mb-2 text-primary"><?=$ks['tytul']?></h6>
            <strong class="mb-1">
                <a href="ksiazki.szczegoly.php?id=<?=$ks['id']?>">

                    <?=$ks['imie']?> <cite title="Source Title"><?=$ks['nazwisko']?>
                </a>
            </strong>
            <div class="mb-1 text-muted"> <?=$ks['cena']?> PLN</div>
            <?php if(!empty($ks['zdjecie'])): ?>
                <a href="ksiazki.szczegoly.php?id=<?=$ks['id']?>"><img src="zdjecia/<?=$ks['zdjecie']?>" alt="<?=$ks['tytul']?>" class="img-thumbnail" /></a>
            <?php else: ?>
                <a href="ksiazki.szczegoly.php?id=<?=$ks['id']?>"><img src="zdjecia/noimage.jpg" alt="<?=$ks['tytul']?>" class="img-thumbnail" /></a>
            <?php endif; ?>
        </div>

    </div>
    <?php endforeach; ?>

</div>