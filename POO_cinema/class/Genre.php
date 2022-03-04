<?php

class Genre {
    private string $_genre;
    private array $_films;

    public function __construct($genre){
        $this->_genre = $genre;
        $this->_films = [];
    }

    public function __toString(){

        return $this->get_genre();
    }

    public function ajoutfilms($films){
        array_push($this->_films,$films);

        return $this;
    }

    public function get_genre()
    {
        return $this->_genre;
    }

    public function set_genre($genre)
    {
        $this->_genre = $genre;

        return $this;
    }

    public function get_films()
    {
        return $this->_films;
    }

    public function set_films($films)
    {
        $this->_films = $films;

        return $this;
    }
    public function showGenre(){


        echo "<h3>Films de $this</h3>";
        echo "<ul>";
        foreach ($this->_films as $film) {
            echo " <li></i>".$film->get_titre()." sortie  le ". $film->get_dateSortie()." Il dure ". $film->get_duree().". Résumé : ". $film->get_resume()."</li>";        
        }       
        echo"</ul></div></div>";

    }
    public function ajoutGenre($films){

        array_push($this->_films,$films);

        return $this;
    }
}