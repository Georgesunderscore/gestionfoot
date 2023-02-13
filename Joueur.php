
<?php


class Joueur
{
	// déclaration table intermediaire
	private String $_prenom;
    private String $_nom;
    private String $_dateDN;

	

	public function __construct($_prenom,    $_nom,    $_dateDN)
	{
        
        $this->$_prenom 
        $this->$_nom 
        $this->$_dateDN 
        
     
        
    }
    

working on 
    

	/**
	 * Get the value of _nation
	 */ 
	public function get_Joueur()
	{
		return $this->_Joueur;
	}

	/**
	 * Set the value of _nation
	 *
	 * @return  self
	 */ 
	public function set_Joueur($_Joueur)
	{
		$this->_Joueur = $_Joueur;

		return $this;
	}
}