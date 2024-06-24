<?php
include __DIR__ . "/store.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


</head>

<body>

    <h1>Hello OOP World</h1>
    <div class="img_container">
        <div class="img">
            <img src="./img/locandina3.jpg" alt="">
        </div>

        <div class="img">
            <img src="./img/locandina1.jpg" alt="">
        </div>
        <div class="img">
            <img src="./img/locandina2.jpg" alt="">
        </div>

        <div class="img">
            <img src="./img/locandina4.jpg" alt="">
        </div>

        <div class="img">
            <img src="./img/locandina5.jpg" alt="">
        </div>
    </div>
    <!-- SOLUZIONE SCOMODA -->
    <!-- 
<li><?= "$film1->titolo $film1->genere $film1->anno_di_uscita $film1->regia $film1->durata" ?></li>
<li><?= "$film2->titolo $film2->genere $film2->anno_di_uscita $film2->regia $film2->durata" ?></li>
<li><?= "$film3->titolo $film3->genere $film3->anno_di_uscita $film3->regia $film3->durata" ?></li>
<li><?= "$film4->titolo $film4->genere $film4->anno_di_uscita $film4->regia $film4->durata" ?></li>
 -->



    <!-- SOLUZIONE FOR EACH + ARRAY -->
    <!-- <ul>
<?php
foreach ($movies as $indice => $film) {
    echo "<li>Titolo:$film->titolo <br> Genere:$film->genere <br> Anno di uscita:$film->anno_di_uscita <br> Paese:$film->paese <br> Regista:$film->regia <br> Durat$film->durata</li>";
}
?>
</ul>  -->


    <!-- SOLUZIONE FOR EACH + ARRAY + FUNCTION -->
    <ul>
        <?php
        foreach ($movies as $indice => $film) {
        ?> <li> <?= $film->printAttributi() ?></li><?php
 }
     ?>
    </ul>


</body>

</html>