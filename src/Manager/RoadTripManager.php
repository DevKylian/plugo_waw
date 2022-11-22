<?php

namespace App\Manager;

use Plugo\Manager\AbstractManager;
use App\Entity\RoadTrip;

class RoadTripManager extends AbstractManager {

    /**
     * @param RoadTrip $roadTrip
     * @return \PDOStatement
     */
    public function add(RoadTrip $roadTrip): \PDOStatement
    {
        return $this->create(RoadTrip::class, [
           'intitule' => $roadTrip->getIntitule(),
           'type_vehicule' => $roadTrip->getTypeVehicule()
        ]);
    }

    /**
     * @param array $clause
     * @return mixed
     */
    public function findOneBy(array $clause) {
        return $this->readOne(RoadTrip::class, $clause);
    }

    /**
     * @return array|false|null
     */
    public function findAll() {
        return $this->readMany(RoadTrip::class);
    }

    /**
     * @param array|null $clause
     * @param array|null $orderBy
     * @return array|false|null
     */
    public function findBy(array $clause = null, array $orderBy = null) {
        return $this->readMany(RoadTrip::class, $clause, $orderBy);
    }

    /**
     * @param RoadTrip $roadTrip
     * @return \PDOStatement
     */
    public function edit(RoadTrip $roadTrip): \PDOStatement
    {
        return $this->update(RoadTrip::class, [
            'intitule' => $roadTrip->getIntitule(),
            'type_vehicule' => $roadTrip->getTypeVehicule()
        ], $roadTrip->getId());
    }

    /**
     * @param RoadTrip $roadTrip
     * @return \PDOStatement
     */
    public function remove(RoadTrip $roadTrip): \PDOStatement
    {
        return $this->delete(RoadTrip::class, $roadTrip);
    }

}