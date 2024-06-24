<?php
class Movie
{
    public $titolo;
    public $genere;
    public $anno_di_uscita;
    public $paese;
    public $regia;
    public $durata;

    public function printAttributi()
    {
        return "Titolo: $this->titolo <br> Genere: $this->genere  <br> Anno di uscita: $this->anno_di_uscita  <br> Paese: $this->paese  <br> Regista: $this->regia  <br> Durata: $this->durata";
    }
}

$film1 = new Movie();
$film1->titolo = "Inside Out 2";
$film1->genere = "Animazione";
$film1->anno_di_uscita = 2024;
$film1->paese = "USA";
$film1->regia = "Kelsey Mann";
$film1->durata = "96 min";

$film2 = new Movie();
$film2->titolo = "(500) Days of Summer";
$film2->genere = "Commedia, Sentimentale";
$film2->anno_di_uscita = 2009;
$film2->paese = "USA";
$film2->regia = "Marc Webb";
$film2->durata = "95 min";

$film3 = new Movie();
$film3->titolo = "The Art of Getting by";
$film3->genere = "Commedia, Sentimentale";
$film3->anno_di_uscita = 2011;
$film3->paese = "USA";
$film3->regia = "Gavin Wiesen";
$film3->durata = "85 min";

$film4 = new Movie();
$film4->titolo = "Never Back Down";
$film4->genere = "Avventura, Azione, Sportivo";
$film4->anno_di_uscita = 2008;
$film4->paese = "USA";
$film4->regia = "Jeff Wadlow";
$film4->durata = "115 min";

$film5 = new Movie();
$film5->titolo = "Kimi No Na Wa";
$film5->genere = "Animazione";
$film5->anno_di_uscita = 2016;
$film5->paese = "Giappone";
$film5->regia = "Makoto Shinkai";
$film5->durata = "107 min";