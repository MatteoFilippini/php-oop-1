<!-- 
    - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

 -->

<?php

require 'models/Movies.php';
include 'data/movies.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($movies as $movie) :
        $movie_obj = new Movies($movie['title'], $movie['year'], $movie['product'], $movie['actor']);
        $a = $movie_obj->onAir();
    ?>
        <p><?= $a ?></p>
        <?php if ($movie_obj->onAir() !== '1') : ?>
            <h4><?= $movie_obj->title ?></h4>
            <p><?= $movie_obj->year ?></p>
            <span><?= $movie_obj->product . '-' ?></span>
            <span><?= $movie_obj->actor ?></span>
            <p><?= $movie_obj->visible ?></p>
            <hr>
        <?php else : ?>
            <p>FIlm non piu disponibile</p>
        <?php endif ?>

    <?php endforeach ?>
</body>

</html>