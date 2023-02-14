
<?php



class Joueur
{
	// déclaration table intermediaire
	private String $_prenom;
    private String $_nom;
	private String $_pays;
    private DateTime $_dateDN;
	private Equipe $_equipe;
	
	public function __construct($prenom, $nom, $dateDN, $equipe)
	{
        $this->_prenom = $prenom ;
        $this->_nom    = $nom ;
        $this->_dateDN = new dateTime($dateDN) ;
		$this->_equipe = $equipe;

		$this->_equipe->ajoutJoueur($this);

		


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
	 * @return  self
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
		$ecrire = $this->getNom() . " " . $this->getPrenom() . " " . $this->getDateDN();
		echo "<br>";
		return $ecrire;
	}

	/**
	 * Get the value of _pays
	 */ 
	public function getPays()
	{
		return $this->_pays;
	}

	/**
	 * Set the value of _pays
	 *
	 * @return  self
	 */ 
	public function setPays($pays)
	{
		$this->_pays = $pays;

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