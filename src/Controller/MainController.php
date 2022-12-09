<?php

namespace App\Controller;

use App\Manager\RoadTripManager;
use Plugo\Controller\AbstractController;

class MainController extends AbstractController {

    public function home() {
        $roadTripManager = new RoadTripManager();
        $listeRoadTrip = $roadTripManager->findBy([],['id' => 'DESC'], 3);
        return $this->renderView('Main/index.php', ['listeRoadTrip' => $listeRoadTrip]);
    }

}