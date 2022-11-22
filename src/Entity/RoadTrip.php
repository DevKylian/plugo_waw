<?php

namespace App\Entity;

class RoadTrip {

    private ?int $id;
    private ?string $intitule;
    private ?string $typeVehicule;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    /**
     * @param string|null $intitule
     */
    public function setIntitule(?string $intitule): void
    {
        $this->intitule = $intitule;
    }

    /**
     * @return string|null
     */
    public function getTypeVehicule(): ?string
    {
        return $this->typeVehicule;
    }

    /**
     * @param string|null $typeVehicule
     */
    public function setTypeVehicule(?string $typeVehicule): void
    {
        $this->typeVehicule = $typeVehicule;
    }



}