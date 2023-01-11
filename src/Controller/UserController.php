<?php

namespace App\Controller;

use App\Manager\RoadTripManager;
use Plugo\Controller\AbstractController;
use App\Entity\User;
use App\Manager\UserManager;
use Plugo\Services\Auth\Authenticator;
use Plugo\Services\Auth\CheckCredentials;
use Plugo\Services\FlashMessage\FlashMessage;
use Plugo\Services\ImageUploader\ImageUploader;

class UserController extends AbstractController {

    public function __construct() {
        $this->flashMessage = new FlashMessage();
        $this->flashMessage->clearFlashMessage();
    }

    public function register() {
        if(isset($_SESSION['user'])){
            return $this->redirectToRoute('home');
        }

        if(isset($_POST) && !empty($_POST)){
            $checkCredentials = new CheckCredentials();
            $UserManager = new UserManager();

            $iserror = false;

            if(!$checkCredentials->checkEmail($_POST['email'])){
                $iserror = true;
            }

            if(!$checkCredentials->checkPassword($_POST['password'], $_POST['passwordVerif'])){
                $iserror = true;
            }

            if(!$iserror){
                if(empty($UserManager->findOneBy(['email' => $_POST['email']]))){
                    $user = new User();
                    $user->setEmail($_POST['email']);
                    $user->setPassword($_POST['password']);
                    $user->setCreatedAt(date('Y-m-d H:i:s'));

                    $UserManager->add($user);

                    $this->flashMessage->generateFlashMessage('Authenticationsuccess', 'success', 'Le compte a bien été créé !');

                    return $this->redirectToRoute('login');
                }else{
                    $this->flashMessage->generateFlashMessage('AuthenticationerrorInscription', 'error', 'Un compte existe déjà avec cette adresse email');
                }
            }

        }
        return $this->renderView('User/register.php');
    }

    public function login() {
        if(isset($_SESSION['user'])){
            return $this->redirectToRoute('home');
        }

        if(isset($_POST) && !empty($_POST)){
            $authenticator = new Authenticator();
            $result = $authenticator->login($_POST);
            if($result){
                return $this->redirectToRoute('home');
            }else{
                $this->flashMessage->generateFlashMessage('AuthenticationerrorLogin', 'error', 'Erreur lors de la connexion. L\'adresse email ou le mot de passe ne correrspondent pas');
            }
        }

        return $this->renderView('user/login.php');
    }

    public function logout() {
        if(!isset($_SESSION['user'])){
            return $this->redirectToRoute('home');
        }

        $authenticator = new Authenticator();
        $authenticator->logout();

        return $this->redirectToRoute('login');
    }

    public function getRoadTripsOfUser(){
        $roadTripManager = new RoadTripManager();
        $userManager = new  UserManager();
        $listeRoadTrips = $roadTripManager->findBy(['user_id' => $_GET['id']]);
        $user = $userManager->findOneBy(['id' => $_GET['id']]);

        return $this->renderView('User/details.php', ['listeRoadTrip' => $listeRoadTrips, 'user' => $user]);
    }

    public function espaceMembre() {
        $roadTripManager = new RoadTripManager();
        $userManager = new  UserManager();
        $listeRoadTrips = $roadTripManager->findBy(['user_id' => $_GET['id']]);
        $user = $userManager->findOneBy(['id' => $_GET['id']]);
        $iserror = false;
        if(isset($_POST) && !empty($_POST)){
            $checkCredentials = new CheckCredentials();
            if(!$checkCredentials->checkPassword($_POST['password'], $_POST['passwordVerif'])){
                $iserror = true;
            }

            if(!$iserror){
                $user->setPassword($_POST['password']);
                $userManager->edit($user);
                $this->flashMessage->generateFlashMessage('PasswordUpdateSuccess', 'success', 'Mot de passe bien modifié !');
                return $this->redirectToRoute('logout');
            }else{
                $this->flashMessage->generateFlashMessage('PasswordUpdateError', 'error', 'Impossible de modifier le mot de passe !');
            }
        }

        if(isset($_FILES) && !empty($_FILES)){
            $folderName = "user_" . uniqid($_SESSION['user']['id']);
            $imageUploader = new ImageUploader();
            $result = $imageUploader->uploadPicture($_FILES, $folderName);
            if($result){
                $user->setPicture($result);
            }
            $userManager->edit($user);
        }

        return $this->renderView('User/espace_membre.php', ['listeRoadTrip' => $listeRoadTrips, 'user' => $user]);
    }
}