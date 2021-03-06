<?php

class Film{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_resume;
    private Genre $_genre;
    private array $_casting;

    

    public function __construct(string $titre,string $dateSortie, int $duree, Realisateur $realisateur, string $resume, Genre $genre)
    {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $realisateur->ajoutRealisation($this);
        $this->_resume = $resume;
        $this->_genre = $genre;
        $genre->ajoutGenre($this);
        $this->_casting =[];
    }


    public function __toString()
    {
        return $this->get_titre() .' sortie le '. $this->get_dateSortie().'. Il dure '.$this->get_duree().'. Résumé : '.$this->get_resume().' Genre : '.$this->get_genre();
    }

    public function get_titre()
    {
            return $this->_titre;
    }

    public function set_titre($titre)
    {
            $this->_titre = $titre;

            return $this;
    }
    
    public function get_dateSortie()
    {
        return $this->_dateSortie->format('d F Y');
    }

    public function set_dateSortie($dateSortie)
    {
        $this->_dateSortie = $dateSortie;

        return $this;
    }
    public function get_duree()
    {

        if ($this->_duree > 60) {
            return strftime('%H heures %M minutes' ,mktime(0,$this->_duree));
        }else {
            return strftime('%M minutes' ,mktime(0,$this->_duree));
        }
    }

    public function set_duree($duree)
    {
        $this->_duree = $duree;

        return $this;
    }

    public function get_realisateur()
    {
            return $this->_realisateur;
    }

    
    public function set_realisateur($realisateur)
    {
            $this->_realisateur = $realisateur;

            return $this;
    }

    public function get_resume()
    {
        return $this->_resume;
    }

    
    public function set_resume($resume)
    {
        $this->_resume = $resume;

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
    public function ajoutCasting($casting){
        array_push($this->_casting,$casting);

        return $this;
    }

    public function showCasting(){

        echo "<h3>Casting de $this->_titre</h3>";
        echo "<ul>";
        foreach ($this->_casting as $cast) {
            echo " <li></i>$cast</br>";        
        }       
        echo"</ul></div></div>";
    }

}