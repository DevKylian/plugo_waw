<?php

namespace App\Controller;

use App\Entity\Checkpoint;
use App\Manager\CheckpointManager;
use Plugo\Controller\AbstractController;
use App\Entity\RoadTrip;
use App\Manager\RoadTripManager;
use Plugo\Services\FlashMessage\FlashMessage;

class RoadTripController extends AbstractController {

    public function __construct() {
        $this->flashMessage = new FlashMessage();
        $this->flashMessage->clearFlashMessage();
    }

    public function allRoadTrip() {
        $roadTripManager = new RoadTripManager();
        $listeRoadTrip = $roadTripManager->findAll();
        return $this->renderView('RoadTrip/index.php', ['listeRoadTrip' => $listeRoadTrip]);
    }

    public function addRoadTrip() {
        $roadTripManager = new RoadTripManager();
        if(isset($_POST) && !empty($_POST)){
            if(empty($_POST['checkPoint']) || empty($_POST['checkPoint']['checkPointDepart']) || empty($_POST['checkPoint']['checkPointArrive'])){
                $this->flashMessage->generateFlashMessage('AuthenticationErrorInscription', 'Error', 'Le point de départ et/ou d\'arrivée n\'as pas été défini');
                return $this->redirectToRoute('addRoadTrip');
            }else{
                $roadTrip = new RoadTrip();
                $roadTrip->setIntitule($_POST['nomVoyage']);
                $roadTrip->setTypeVehicule($_POST['typeVehicule']);
                $roadTrip->setUserId($_SESSION['user']['id']);
                $roadTripManager->add($roadTrip);

                foreach($_POST['checkPoint'] as $currentCheckPoint){
                    $checkPoint = new Checkpoint();
                    $checkPointManager = new CheckpointManager();
                    $checkPoint->setNom($currentCheckPoint['nom']);
                    $checkPoint->setCoordonnee($currentCheckPoint['coordonnees']);
                    $checkPoint->setDateDepart($currentCheckPoint['date_depart']);
                    $checkPoint->setDateArrive($currentCheckPoint['date_arrive']);
                    $checkPoint->setRoadtripId($roadTripManager->findBy([], ['id' => 'DESC'], 1)[0]->getId());

                    $checkPointManager->add($checkPoint);
                }
            }
            return $this->redirectToRoute('allRoadTrip');
        }
        return $this->renderView('RoadTrip/add.php');
    }

}