<!-- 
    - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

 -->

<!-- MOVIE
    titolo
    anno
    produttore
    cast

    costruct

    get
    set


 -->

<?php

class Movies
{
    public $title;
    public $year;
    public $product;
    public $actor;
    public $visible;

    public function __construct($title, $year, $product, $actor, $visible = true)
    {
        $this->title = $title;
        $this->year = $year;
        $this->product = $product;
        $this->actor = $actor;
        $this->visible = $visible;
    }

    public function getMovies()
    {
        return $this->title;
    }

    public function setMovies($title)
    {
        $this->title = $title;
    }

    public function onAir()
    {
        if ($this->year < 2000) {
            $this->visible = false;
        }
    }
}

$movie1 = new Movies('uncharted', '2022', 'pippo', 'jonny');
$movie2 = new Movies('cenerentola', '1998', 'disney', 'cene');

var_dump($movie1);
var_dump($movie2);

$movie1->onAir();
$movie2->onAir();

var_dump($movie1);
var_dump($movie2);
