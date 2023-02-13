
<?php


class Pays
{
	// déclaration table intermediaire
	private String $_Pays;

	

	public function __construct($Pays)
	{
		$this->_Pays = $Pays;
	}



    

	/**
	 * Get the value of _nation
	 */ 
	public function get_Pays()
	{
		return $this->_Pays;
	}

	/**
	 * Set the value of _nation
	 *
	 * @return  self
	 */ 
	public function set_Pays($_Pays)
	{
		$this->_Pays = $_Pays;

		return $this;
	}
}