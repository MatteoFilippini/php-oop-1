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

    public function __construct($title, $year, $product, $actor)
    {
        $this->title = $title;
        $this->year = $year;
        $this->product = $product;
        $this->actor = $actor;
    }
}

$movie1 = new Movies('uncharted', '2022', 'pippo', 'jonny');

var_dump($movie1);
