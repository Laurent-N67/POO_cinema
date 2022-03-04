<?php

class Acteur extends Personne
{
    private array $_casting;

    public function __construct($nom,$prenom,$sexe,$dateBD)
    {
        parent::__construct($nom,$prenom,$sexe,$dateBD);
        $this->_casting =[];

    }
    
    public function __toString()
    {
        return $this->get_nom().' '.$this->get_prenom().' '. $this->getAge();
    }

        public function showFilmo(){

           
            echo "<h3>Filmographie de $this</h3>";
            echo "<ul>";
            foreach ($this->_casting as $cast) {
                echo "<li>  </i>".$cast->getFilms()->get_titre() .' sortie le '. $cast->getFilms()->get_dateSortie().'. Il dure '.$cast->getFilms()->get_duree().'. Résumé : '.$cast->getFilms()->get_resume().' Genre : '.$cast->getFilms()->get_genre()."</br>";
            }       
            echo"</ul></div></div>";
        }
        public function ajoutCasting($casting){
            array_push($this->_casting,$casting);
    
            return $this;
    
        }
}