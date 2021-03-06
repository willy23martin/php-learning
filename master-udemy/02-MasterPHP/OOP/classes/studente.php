<?php

class Studente {

    // Attributes
    public $nickname;
    private $codiceStudente;
    protected $nome;
    protected $cognome;

    // Constructor

    /**
     * Studente
     * @param type $codiceStudente
     * @param type $nome
     * @param type $cognome
     * @param type $nickname
     */
    public function __construct($codiceStudente, $nome, $cognome, $nickname) {
        $this->codiceStudente = $codiceStudente;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->nickname = $nickname;
    }
    
    // Destructor:
    /**
     * Executes when the web page is been loaded.
     */
    public function __destruct() {
        $this->codiceStudente='';
        $this->nome='';
        $this->cognome='';
        $this->nickname='';
    }

    // Methods
    public function getNickName() {
        return $this->nickname;
    }

    public function setNickName($newNickName) {
        $this->nickname = $newNickName;
    }

    public function getCodiceStudente() {
        return $this->codiceStudente;
    }

    public function setCodiceStudente($codiceStudente) {
        $this->codiceStudente = $codiceStudente;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    /**
     * Coi type definito.
     * @param Studente $studente
     * @return type
     */
    public function resume_information(Studente $studente) {
        return "Nickname: " . $studente->nickname .
                " - " . $studente->getCodiceStudente() .
                " - " . $studente->getNome() .
                "-" . $studente->getCognome();
    }
    
    // Magic Methods:
    public function __toString() {
        return 'Lo studente si chiama: '.$this->nome.' '.$this->cognome.'.';
    }

}

$studenteA = new Studente("A0024", "Will", "Cha", "WMC-beta");
$studenteA->setNickName("WMC");
echo $studenteA->getNickName();
echo ($studenteA->resume_information($studenteA));
var_dump($studenteA);
