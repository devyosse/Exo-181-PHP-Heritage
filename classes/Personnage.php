<?php

// Ma classe s'appelle Personnage
class Personnage {

    // La propriété id a été modifié pour passer de private à protected, je ne peux pas la modifier ou la lire directement en dehors de cette classe
    // Mais les classes enfants vont hériter de cette propriété
    // - private $id;
    // + protected $id;
    protected $id;
    protected $nom;
    protected int $x;
    protected int $y;
    protected int $vie = 50;

    // Constructeur de ma classe permettant de définir des valeurs par défaut lorsqu'elle est instanciée
    public function __construct() {
        $this->setNom("Nom par défaut");
        $this->x = 0;
        $this->y = 0;
    }

    // Méthode permettant de déplacer le personnage vers la droite
    public function walkRight() {
        $this->x+=1;

    }

    /**
     * @return int
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * @param int $vie
     */
    public function setVie($vie)
    {
        $this->vie = $vie;
    }

    // Setter permettant de définir l'attribut privé id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter permettant de retourner l'attribut privé id
    public function getId() {
        return $this->id;
    }

    // Setter permettant de définir l'attribut protégé nom
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Getter permettant de retourner l'attribut protégé nom
    public function getNom() {
        return $this->nom;
    }
} 