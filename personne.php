<?php
    //définir une classe personne avec ses propriétés
    class Personne
    {
        protected $prenom;
        protected $nom;
        protected $age;

        //definir le constructeur de la classe personne
        public function __construct($prenom, $nom, $age)
        {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
            echo 'Appel du constructeur de la classe Personne'."\n";
        }
        //Les getter et les setter
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function getNom()
        {
            return $this->nom;
        }
        public function getAge()
        {
            return $this-> age;
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        public function setAge($age)
        {
            $this->age = $age;
        }

        //la méthode de la classe permettant d’afficher une personne
        public function affichagePersonne()
        {
            echo $this->prenom.' '.$this->nom.' '.$this->age."\n";
        }
        
    }
?>
