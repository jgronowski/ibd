<?php

// jesli nie podano parametru id, przekieruj do listy książek
if(empty($_GET['id'])) {
    header("Location: ksiazki.lista.php");
    exit();
}

$id = (int)$_GET['id'];

include 'header.php';

use Ibd\Ksiazki;

$ksiazki = new Ksiazki();
$dane = $ksiazki->pobierz($id);
?>

<h2><?=$dane['tytul']?></h2>

<p>
	<a href="ksiazki.lista.php"><i class="fas fa-chevron-left"></i> Powrót</a>
</p>

<p>szczegóły książki......</p>

    <table class="table">
        <tr><?php if(!empty($dane['zdjecie'])): ?>
                <img src="zdjecia/<?=$dane['zdjecie']?>" alt="<?=$dane['tytul']?>" />
            <?php else: ?>
                <img src="zdjecia/noimage.jpg" alt="Brak Obrazka" />
            <?php endif; ?></tr>
        <tr><td>Opis:</td><td><?=$dane['opis']?></td></tr>
        <tr><td>Cena:</td><td><?=$dane['cena']?></td></tr>
        <tr><td>ISBN:</td><td><?=$dane['isbn']?><</td></tr>
        <tr><td>Liczba Stron:</td><td><?=$dane['liczba_stron']?></td></tr>
    </table>

<?php include 'footer.php'; ?>