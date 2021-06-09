<?php 
     
    require_once 'personne.php';

    //classe Etudiant qui hérite de la classe Personne
    class Etudiant extends Personne
    {
            
        public $ecole;
        public $niveau;

        public function __construct($prenom, $nom, $age, $ecole, $niveau)
        {
            parent:: __construct($prenom, $nom, $age);
            $this->ecole = $ecole;
            $this->niveau = $niveau;
            echo 'Appel du constructeur de la classe Etudiant'."\n";
        }
        public function getEcole()
        {
            return $this-> ecole;
        }
        public function getNiveau()
        {
            return $this-> niveau;
        }
        public function setEcole($ecole)
        {
            $this -> ecole = $ecole;
        }

        public function setNiveau($niveau)
        {
            $this -> niveau = $niveau;
        }
        //Methode de la classe permettant d'afficher un Etudiant 
        public function afficheEtudiant()
        {
            parent::affichagePersonne();
            echo $this -> ecole.' '.$this -> niveau.' '."\n";
            
        }
    }

?>