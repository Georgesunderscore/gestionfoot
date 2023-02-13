
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
	public function get_nation()
	{
		return $this->_nation;
	}

	/**
	 * Set the value of _nation
	 *
	 * @return  self
	 */ 
	public function set_nation($_nation)
	{
		$this->_nation = $_nation;

		return $this;
	}
}