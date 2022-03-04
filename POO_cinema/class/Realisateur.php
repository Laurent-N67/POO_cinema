<?php
class Realisateur extends Personne
{
    
    private array $_realisation;

    public function __construct($nom,$prenom,$sexe,$dateBD)
    {
        parent::__construct($nom,$prenom,$sexe,$dateBD);
        $this->_realisation = [];
    }
    public function __toString()
    {
        return $this->get_nom().' '.$this->get_prenom().' '. $this->getAge();
    }

    public function get_realisation()
    {
        return $this->_realisation;
    }

    public function set_realisation($realisation)
    {
        $this->_realisation = $realisation;
        return $this;
    }
    public function ajoutRealisation($realisation){
        array_push($this->_realisation,$realisation);

        return $this;
    }
    public function showReal(){


        echo "<h3>Réalisation de $this</h3>";
        echo "<ul>";
        foreach ($this->_realisation as $real) {
            echo " <li></i>$real</br>";
        }       
        echo"</ul></div></div>";
    }

    
}