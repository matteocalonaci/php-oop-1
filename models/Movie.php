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

    
    public function __construct($titolo, $genere, $anno_di_uscita, $paese, $regia,$durata)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->anno_di_uscita = $anno_di_uscita;
        $this->paese = $paese;
        $this->regia = $regia;
        $this->durata = $durata;
    }
}


$film1 = new Movie("Inside Out 2","Animazione",2024,"USA","Kelsey Mann","96 min");
$film2 = new Movie("(500) Days of Summer","Commedia, Sentimentale",2009,"USA","Marc Webb","95 min");
$film3 = new Movie("The Art of Getting by","Commedia, Sentimentale",2011,"USA","Gavin Wiesen","85 min");
$film4 = new Movie("Never Back Down","Avventura, Azione, Sportivo",2008,"USA","Jeff Wadlow","115 min");
$film5 = new Movie("(500) Days of Summer","Animazione",2016,"Giappone","Makoto Shinkai","107 min");


// $film2 = new Movie();
// $film2->titolo = "(500) Days of Summer";
// $film2->genere = "Commedia, Sentimentale";
// $film2->anno_di_uscita = 2009;
// $film2->paese = "USA";
// $film2->regia = "Marc Webb";
// $film2->durata = "95 min";

// $film3 = new Movie();
// $film3->titolo = "The Art of Getting by";
// $film3->genere = "Commedia, Sentimentale";
// $film3->anno_di_uscita = 2011;
// $film3->paese = "USA";
// $film3->regia = "Gavin Wiesen";
// $film3->durata = "85 min";

// $film4 = new Movie();
// $film4->titolo = "Never Back Down";
// $film4->genere = "Avventura, Azione, Sportivo";
// $film4->anno_di_uscita = 2008;
// $film4->paese = "USA";
// $film4->regia = "Jeff Wadlow";
// $film4->durata = "115 min";

// $film5 = new Movie();
// $film5->titolo = "Kimi No Na Wa";
// $film5->genere = "Animazione";
// $film5->anno_di_uscita = 2016;
// $film5->paese = "Giappone";
// $film5->regia = "Makoto Shinkai";
// $film5->durata = "107 min";