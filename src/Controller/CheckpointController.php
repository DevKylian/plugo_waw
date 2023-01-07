<?php

namespace App\Controller;

use App\Entity\Checkpoint;
use App\Manager\CheckpointManager;
use Plugo\Controller\AbstractController;

class CheckpointController extends AbstractController {

    /**
     * TODO : Mettre une vérification pour voir si l'utilisateur connecté correspond bien a celui qui as créer le roadtrip du checkpoint choisis
     * @return void
     */
    public function deleteCheckPoint() {
        if(!isset($_SESSION['user'])){
            return $this->redirectToRoute('home');
        }

        $checkPointManager = new CheckpointManager();
        $checkPoint = $checkPointManager->findBy(['id' => $_GET['id']]);
        if($checkPoint[0]->getRoadtrip()->getUser()->getId() == $_SESSION['user']['id']){
            $checkPointManager->remove($checkPoint[0]);
        }else{
            //TODO : Mettre un message d'erreur
        }

        //TODO : eviter de supprimer le roadtrip de départ et d'arrivée
        return $this->redirectToRoute('detailsRoadTrip', ['id' => $_GET['id_roadtrip']]);


    }

    public function updateCheckPoint() {

    }

}