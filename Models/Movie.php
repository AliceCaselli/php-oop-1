<?php

class Movie
{

    public $title;
    public $director;
    public $producer;
    public $genre;

    function __construct(string $title, string $director, string $producer, string $genre)
    {

        $this->title = $title;
        $this->director = $director;
        $this->producer = $producer;
        $this->genre = $genre;
    }

    public function getMovie()
    {
        echo 'Titolo: ' . $this->title . '<br>';
        echo 'Regia: ' . $this->director . '<br>';
        echo 'Casa di produzione: ' . $this->producer . '<br>';
        echo 'Genere: ' . $this->genre . '<br>';
    }
}
