
<?php


class Nationalite
{
	// déclaration table intermediaire
	private String $_nation;

	

	public function __construct($nation)
	{
		$this->_nation = $nation;
	}



    

	/**
	 * Get the value of _nation
	 */ 
	public function getNation():string
	{
		return $this->_nation;
	}

	/**
	 * Set the value of _nation
	 *
	 * @return  self
	 */ 
	public function setNation($nation)
	{
		$this->_nation = $nation;

		return $this;
	}

	public function __toString()
	{
		$ecrire = $this->getNation();
		echo "<br>";
		return $ecrire;
	}

}