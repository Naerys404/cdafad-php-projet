<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Service\SecurityService;
use App\Service\MediaService;

class RegisterController extends AbstractController
{
    private SecurityService $securityService;
    private MediaService $mediaService;

    //Injection du UserRepository
    public function __construct()
    {
        $this->securityService = new SecurityService();
        $this->mediaService = new MediaService(); 
    }

    //Méthode pour s'inscrire
    public function register(): mixed
    {
        $data = [];
        
        //Test si le formulaire est submit
        if ($this->isFormSubmitted($_POST,  "submit")) {
            //Ajout du compte en BDD
            $data["msg"] = $this->securityService->saveUser($_POST);
        }

        return $this->render("register", "S'inscrire", $data);
    }

    //Méthode pour se connecter
    public function login(): mixed
    {
        $data = [];

        //Test si le formulaire est soumis
        if ($this->isFormSubmitted($_POST)) {
            //Logique de la connexion
            $data["msg"] = $this->securityService->authenticate($_POST);
        }

        return $this->render("login", "Se connecter", $data);
    }

    //Méthode pour se connecter
    public function logout(): void
    {
        session_destroy();
        header('Location: /');
        exit;
    }

    public function showProfil(){
        $data = [];
        $user = $this->securityService->getProfil();
        if(isset($user)){
            $img = $user->getMedia();
            $img = $this->mediaService->getMedia($img->getId())->getUrl();

            $data['pseudo'] = $user->getPseudo();
            $data['lastname'] = $user->getLastname();
            $data['firstname'] = $user->getFirstname();
            $data['email'] = $user->getEmail();
            $data['roles'] = $user->getRoles();

            $data['img'] = $img;
            
            return $this->render('profil', "Profil", $data);
        } else { 
            return $this->render("login", "Se connecter", $data);
        }

       
    }
}
