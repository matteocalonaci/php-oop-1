<?php
class Movie
{
    public $titolo;
    public $genere;
    public $anno_di_uscita;
    public $paese;
    public $regia;
    public $durata;
   
}

$film1 = new Movie();
$film1->titolo = "Inside Out 2";
$film1->genere = "Animazione";
$film1->anno_di_uscita = 2024;
$film1->regia = "Kelsey Mann";
$film1->durata = "96 min";

$film2 = new Movie();
$film2->titolo = "(500) Days of Summer";
$film2->genere = "Commedia, Sentimentale";
$film2->anno_di_uscita = 2009;
$film2->regia = "Marc Webb";
$film2->durata = "95 min";

$film3 = new Movie();
$film3->titolo = "The Art of Getting by";
$film3->genere = "Commedia, Sentimentale";
$film3->anno_di_uscita = 2011;
$film3->regia = "Gavin Wiesen";
$film3->durata = "85 min";

$film4 = new Movie();
$film4->titolo = "Never Back Down";
$film4->genere = "Avventura, Azione, Sportivo";
$film4->anno_di_uscita = 2008;
$film4->regia = "Jeff Wadlow";
$film4->durata = "115 min";

$film5 = new Movie();
$film5->titolo = "Kimi No Na Wa";
$film5->genere = "Animazione";
$film5->anno_di_uscita = 2016;
$film5->regia = "Makoto Shinkai";
$film5->durata = "107 min";

$movies = [ $film1, $film2, $film3, $film4, $film5 ]



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">


</head>

<body>

<h1>Hello OOP World</h1>

<!-- <li><?= "$film1->titolo $film1->genere $film1->anno_di_uscita $film1->regia $film1->durata" ?></li>
<li><?= "$film2->titolo $film2->genere $film2->anno_di_uscita $film2->regia $film2->durata"?></li>
<li><?= "$film3->titolo $film3->genere $film3->anno_di_uscita $film3->regia $film3->durata" ?></li>
<li><?= "$film4->titolo $film4->genere $film4->anno_di_uscita $film4->regia $film4->durata" ?></li> -->

<ul>
<?php 
foreach($movies as $indice => $film){
    echo "<li>$film->titolo <br> $film->genere <br> $film->anno_di_uscita <br> $film->regia <br> $film->durata</li>";
}
?>
</ul> 

</body>

</html>