
<?php


class Equipe
{
	// déclaration table intermediaire
	private String $_equipe;
    private Pays $_pays;
    private int $_year;

    private array $_listSaison;
    
   
	public function __construct( $equipe,$pays,$year)
	{
		$this->_equipe = $equipe;
        $this->_pays = $pays;
        $this->_year = $year;
        
        //ajouter 
        $this->_pays->ajoutEquipe($this);
	}

	/**
	 * Get the value of _nation
	 */ 
	public function getEquipe():string
	{
		return $this->_equipe;
	}

	/**
	 * Set the value of _nation
	 *
	 * @return  self
	 */ 
	public function setEquipe($equipe)
	{
		$this->_equipe = $equipe;

		return $this;
	}

    public function __toString()
	{
		$ecrire = $this->getEquipe();
		echo "<br>";
		return $ecrire;
	}

    /**
     * Get the value of _year
     */ 
    public function getYear()
    {
        return $this->_year;
    }

    /**
     * Set the value of _year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->_year = $year;
        
        return $this;
    }
    
    /**
     * Get the value of _listSaison
     */ 
    public function getListSaison()
    {
        return $this->_listSaison;
    }
    
    /**
     * Set the value of _listSaison
     *
     * @return  self
     */ 
    public function setListSaison($listSaison)
    {
        $this->_listSaison = $listSaison;
        return $this;
    }

    public function ajoutSaison(Saison $saison)
    {
        //ajouter un element a la list des livres
        $this->_listSaison [] = $saison;
        return $this;
    }

    

    public function getListJoueurEquipeAffichage(){
        echo "<div class='box boxBlue'>  $this->_equipe";
        echo "$this->_pays ( $this->_year)";
    	echo "<div class='boxChild boxBlue'>";
        if(!empty($this->_listSaison) )
            foreach($this->_listSaison as $saison ){
                //il faut concatention pour utiliser la flech pour acceder fonction precise
                echo "<p>".  $saison->getJoueur()->getPrenom()  . ' ' . $saison->getJoueur()->getNom() . ' ' . $saison->getYear() ."</p>";
                
            }
    	echo "</div>";
    	echo "</div>";
    }
}