<?php

class Conducteur
{
    private string $Nom;
    private string $Prenom;

    /**
     * @param string $Nom
     * @param string $Prenom
     */
    public function __construct(string $Nom, string $Prenom)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     */
    public function setNom(string $Nom): void
    {
        $this->Nom = $Nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->Prenom;
    }

    /**
     * @param string $Prenom
     */
    public function setPrenom(string $Prenom): void
    {
        $this->Prenom = $Prenom;
    }


}