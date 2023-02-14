
<?php



class Saison
{
	// déclaration table intermediaire
	private Joueur $_joueur;
    private DateTime $_dateDDS;
	/*
    @param dateDDS string
	*/
    public function __construct($joueur, string $dateDDS)
	{
        $this->_joueur = $joueur ;
        $this->_dateDDS = new dateTime($dateDDS) ;
    }
	/**
	 * Get the value of _prenom
	 */ 



	public function __toString()
	{
		$ecrire = $this->getjoueur() . " " . $this->getDateDDS();
		echo "<br>";
		return $ecrire;
	}

    /**
     * Get the value of _dateDDS
     */ 
    public function getDateDDS()
    {
        return $this->_dateDDS;
    }

    /**
     * Set the value of _dateDDS
     *
     * @return  self
     */ 
    public function setDateDDS($dateDDS)
    {
        $this->_dateDDS = $dateDDS;

        return $this;
    }

	/**
	 * Get the value of _joueur
	 */ 
	public function getJoueur()
	{
		return $this->_joueur;
	}

	/**
	 * Set the value of _joueur
	 *
	 * @return  self
	 */ 
	public function setJoueur($joueur)
	{
		$this->_joueur = $joueur;

		return $this;
	}
}

// test date date time zone 
//  $d = new DateTimeImmutable("2022-06-02 15:44:48 UTC");
//  $timezones = [ 'Europe/London', 'GMT+04:45', '-06:00', 'CEST' ];		
//  //pour afficher la date par rapport au time zone
//  function getTimezone( $timezones,$d){
//  	foreach ($timezones as $tz) {
//  		$tzo = new DateTimeZone($tz);
// 		//local nouveaux objet retourné
//  		$local = $d->setTimezone($tzo);
//  		echo $local->format(DateTimeInterface::RFC2822 . ' — e'), "\n";
//  	 }
//   }	 