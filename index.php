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
}

$movie1 = new Movies;
$movie_title = $movie1->title = 'ROma';

var_dump($movie1);
var_dump($movie_title);
