
<?php


class Equipe
{
	// déclaration table intermediaire
	private String $_equipe;
    private Pays $_pays;
    private array $_listJoueur;
	public function __construct( $equipe,$pays)
	{
		$this->_equipe = $equipe;
        $this->_pays = $pays;
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
     * Get the value of _listJoueur
     */ 
    public function getListJoueur()
    {
        return $this->_listJoueur;
    }

    /**
     * Set the value of _listJoueur
     *
     * @return  self
     */ 
    public function setListJoueur($listJoueur)
    {
        $this->_listJoueur = $listJoueur;

        return $this;
    }

    public function ajoutJoueur(Joueur $joueur)
        {
            //ajouter un element a la list des livres
            $this->_listJoueur [] = $joueur;
            return $this;
        }
}