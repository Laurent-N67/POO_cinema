<?php

class Role
{
    private string $_role ;
    private array $_casting;

    public function __construct($role)
    {
        $this->_role = $role;
        $this->_casting =[];
    }

    public function __toString()
    {
        return $this->get_role();
    }

    public function get_role()
    {
        return $this->_role;
    }

    public function set_role($role)
    {
        $this->_role = $role;

        return $this;
    }

    
    public function get_acteur()
    {
        return $this->_acteur;
    }

    public function set_acteur($acteur)
    {
        $this->_acteur = $acteur;

        return $this;
    }
    public function ajoutCasting($casting){
        array_push($this->_casting,$casting);

        return $this;
    }
    public function showRole(){

        
        echo "<h3>Dans le rôle de $this</h3>";
        echo "<ul>";
        foreach ($this->_casting as $cast) {
            echo " <li></i>".$cast->getActeur()  ."</br>";
        }
        echo"</ul></div></div>";


    }

}