<?php

namespace App\Controller;

use Plugo\Controller\AbstractController;
use App\Entity\RoadTrip;
use App\Manager\RoadTripManager;

class RoadTripController extends AbstractController {

    public function allRoadTrip() {
        $roadTripManager = new RoadTripManager();
        $listeRoadTrip = $roadTripManager->findAll();

        return $this->renderView('RoadTrip/index.php', ['listeRoadTrip' => $listeRoadTrip]);

    }

}