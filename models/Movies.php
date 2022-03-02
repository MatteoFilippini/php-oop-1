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
