
<?php



class Joueur
{
	// déclaration table intermediaire
	private String $_prenom;
    private String $_nom;
	private String $_paysOrigin;
	private Nationalite $_nationalite;
    private DateTime $_dateDN;
	
	private array $_listSaison;

	
	public function __construct($prenom, $nom, $dateDN,$nationalite)
	{
		$this->_prenom = $prenom ;
        $this->_nom    = is_null($nom) ?  '' : $nom ; 
        $this->_dateDN = new dateTime($dateDN) ;
		$this->_nationalite = $nationalite ;
		
		//ajoute a list des joueurs 
		
    }
	/**
	 * Get the value of _prenom
	 */ 

	public function getPrenom():string
	{
		return $this->_prenom;
	}
	
	/**
	 * Set the value of _prenom
	 *
	 * @return  cette-fonction-return-$-this
	 */ 
	public function setPrenom($prenom)
	{
		$this->_prenom = $prenom;
		return $this;
	}
	/**
	 * Get the value of _nom
	 */ 
	public function getNom():string
	{
		return $this->_nom; 
		
	}

	/**
	 * Set the value of _nom
	 *
	 * @return  self
	 */ 
	public function setNom($nom)
	{
		$this->_nom = $nom;
		return $this;
	}
    
    /**
     * Get the value of _dateDN
     */ 
    public function getDateDN():DateTime
    {
        return $this->_dateDN;
    }

    /**
     * Set the value of _dateDN
     *
     * @return  self
     */ 
    public function setDateDN($dateDN)
    {
        $this->_dateDN = $dateDN;
        return $this;
    }

	public function __toString()
	{
		///diff pour trouve age 
		
		
		$ecrire = $this->getNom() . " " . $this->getPrenom() . " " . $this->getYear(); 
		echo "<br>";
		return $ecrire;
	}

	
	
	
	/**
	 * Get the value of _paysOrigin
	 */ 
	public function getPaysOrigin()
	{
		return $this->_paysOrigin;
	}
	
	/**
	 * Set the value of _paysOrigin
	 *
	 * @return  self
	 */ 
	public function setPaysOrigin($paysOrigin)
	{
		$this->_paysOrigin = $paysOrigin;
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
	public function setListSaison($_listSaison)
	{
		$this->_listSaison = $_listSaison;
		
		return $this;
	}
	
	
    public function ajoutSaison(Saison $saison)
	{
		//ajouter un element a la list des livres
		$this->_listSaison [] = $saison;
		return $this;
	}
	
	public function getYear(){
		$year = date_format($this->getDateDN(), 'Y'); 
		return $year;
	}
	
	
	public function getListEquipeJoueurAffichage(){
		echo "<div class='box boxBlue'>  $this";
		//echo   $this->_nationalite . '(' . $this->getYear() . ')' ;
		echo "<div class='boxChild boxBlue'>";
		if(!empty($this->_listSaison) )
		foreach($this->_listSaison as $saison ){
			//il faut concatention pour utiliser la flech pour acceder fonction precise
			echo "<p>".  $saison->getEquipe() . ' ' . $saison->getEquipe()->getYear() ."</p>";
		}
		echo "</div>";
		echo "</div>";
	}

	/**
	 * Get the value of _nationalite
	 */ 
	public function getNationalite()
	{
		return $this->_nationalite;
	}

	/**
	 * Set the value of _nationalite
	 *
	 * @return  self
	 */ 
	public function setNationalite($nationalite)
	{
		$this->_nationalite = $nationalite;

		return $this;
	}
}
