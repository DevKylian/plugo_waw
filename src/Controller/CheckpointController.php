<?php

namespace App\Controller;

use App\Entity\Checkpoint;
use App\Manager\CheckpointManager;
use Plugo\Controller\AbstractController;
use Plugo\Services\FlashMessage\FlashMessage;

class CheckpointController extends AbstractController {

    public function __construct() {
        $this->flashMessage = new FlashMessage();
    }

    /**
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
            $this->flashMessage->generateFlashMessage('CheckPointDeleteSuccess', 'success', 'Checkpoint supprimé');
        }else{
            $this->flashMessage->generateFlashMessage('CheckPointDeleteError', 'error', 'Impossible de supprimer ce checkpoint');
        }

        return $this->redirectToRoute('detailsRoadTrip', ['id' => $_GET['id_roadtrip']]);


    }

    public function updateCheckPoint() {
        if(!isset($_SESSION['user']) || !isset($_GET['id_roadtrip'])){
            return $this->redirectToRoute('home');
        }

        $checkPointManger = new CheckpointManager();
        $checkPoint = $checkPointManger->findBy(['id' => $_GET['id']]);

        if($checkPoint[0]->getRoadtrip()->getUser()->getId() == $_SESSION['user']['id']){
            if(isset($_POST) && !empty($_POST)){
                $checkPoint[0]->setNom($_POST['nom']);
                $checkPoint[0]->setCoordonnee($_POST['coordonnees']);
                $checkPoint[0]->setDateDepart($_POST['date_depart']);
                $checkPoint[0]->setDateArrive($_POST['date_arrive']);
                $checkPointManger->edit($checkPoint[0]);

                $this->flashMessage->generateFlashMessage('CheckPointUpdateSuccess', 'success', 'Checkpoint modifié');
                return $this->redirectToRoute('detailsRoadTrip', ['id' => $_GET['id_roadtrip']]);
            }
        }else{
            $this->flashMessage->generateFlashMessage('CheckPointUpdateError', 'error', 'Impossible de modifier ce checkpoint');
            return $this->renderView('Checkpoint/edit.php', ['id' => $_GET['id'], 'id_roadtrip' => $_GET['id_roadtrip'] ,'checkPoint' => $checkPoint[0]]);
        }
        return $this->renderView('Checkpoint/edit.php', ['id' => $_GET['id'], 'id_roadtrip' => $_GET['id_roadtrip'] ,'checkPoint' => $checkPoint[0]]);
    }

}