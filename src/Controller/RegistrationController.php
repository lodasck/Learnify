<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'registration')]
    public function index(): Response
    {
        return $this->render('registration/registration.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }
}
