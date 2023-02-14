
<?php



class Joueur
{
	// déclaration table intermediaire
	private String $_prenom;
    private String $_nom;
	private String $_paysOrigin;
	private String $_nationalite;
    private DateTime $_dateDN;
	private Equipe $_equipe;

	private array $_listEquipe;
	
	public function __construct($prenom, $nom, $dateDN, $equipe)
	{
        $this->_prenom = $prenom ;
        $this->_nom    = $nom ;
        $this->_dateDN = new dateTime($dateDN) ;
		$this->_equipe = $equipe;
		//ajoute a list des joueurs 
		$this->_equipe->ajoutJoueur($this);
		$this->ajoutEquipe();
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
		$year = date_format($this->getDateDN(), 'Y'); 
		
		$ecrire = $this->getNom() . " " . $this->getPrenom() . " " . $year; 
		
		echo "<br>";

		return $ecrire;
	}

	// // Your date of birth
	// $bday = $this->getDateDN(); 
	// $today = new Datetime(date('m.d.y'));
			
	// $diff = $bday->diff($today);	
	// $age=$diff->y;
	
	/**
	 * Get the value of list_equipe
	 */ 
	public function getListEquipe()
	{
		return $this->_listEquipe;
	}

	/**
	 * Set the value of list_equipe
	 *
	 * @return  self
	 */ 
	public function setListEquipe($listEquipe)
	{
		$this->_listEquipe = $listEquipe;

		return $this;
	}

	
	public function ajoutEquipe()
        {
            //ajouter un element a la list des livres
			$this->_listEquipe [] = $this->_equipe;
            return $this;
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