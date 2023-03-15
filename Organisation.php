<?php

class Organisation
{
    private string $Nom;
    private string $Ville;
    private array $garages=[];
    private Vehicule $vehicule;

    /**
     * @param string $Nom
     * @param string $Ville
     * @param array $garages
     */
    public function __construct(string $Nom, string $Ville)
    {
        $this->Nom = $Nom;
        $this->Ville = $Ville;

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
    public function getVille(): string
    {
        return $this->Ville;
    }

    /**
     * @param string $Ville
     */
    public function setVille(string $Ville): void
    {
        $this->Ville = $Ville;
    }

    /**
     * @return array
     */
    public function getGarages(): array
    {
        return $this->garages;
    }

    /**
     * @param array $garages
     */
    public function setGarages(array $garages): void
    {
        $this->garages = $garages;
    }

    public function addVehiculeInGarage()
    {
        //return $this->vehicule();

    }

    /**
     * @return Vehicule
     */
    public function getVehicule(): Vehicule
    {
        return $this->vehicule();
    }

    /**
     * @param Vehicule $vehicule
     */
    public function setVehicule(Vehicule $vehicule): void
    {
        $this->vehicule = $vehicule;
    }

}