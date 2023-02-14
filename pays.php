
<?php


class Pays
{
	// déclaration table intermediaire
	private String $_Pays;
	private array $_listEquipe;
	

	public function __construct($Pays)
	{
		$this->_Pays = $Pays;
	}



    

	/**
	 * Get the value of _nation
	 */ 
	public function getPays():string
	{
		return $this->_Pays;
	}

	/**
	 * Set the value of _nation
	 *
	 * @return  self
	 */ 
	public function setPays($Pays)
	{
		$this->_Pays = $Pays;

		return $this;
	}

	public function __toString()
	{
		$ecrire = $this->getPays();
		echo "<br>";
		return $ecrire;
	}

        /**
     * Get the value of _listFilm
     */ 
    public function getListEquipe()
    {	
		//affichage

        return $this->_listEquipe;
    }

    /**
     * Set the value of _listFilm
     *
     */ 
    public function setListEquipe($_listEquipe)
    {
        $this->_listEquipe = $_listEquipe;

        
    }

	
    public function ajoutEquipe(Equipe $equipe)
        {
            //ajouter un element a la list des livres
            $this->_listEquipe [] = $equipe;
            return $this;
        }

	public function getListEquipeAffichage()
	{	
		echo "<div class='box'>  $this->_Pays";
		echo "<div class='boxChild'>";
		foreach($this->_listEquipe as $value ){
			echo "<p>  $value	 </p>";
		}
		echo "</div>";
		echo "</div>";
		
	}


}