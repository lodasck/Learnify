<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CourseController extends AbstractController
{
    #[Route('/course', name: 'course')]
    public function index(): Response
    {
        return $this->render('course/course.html.twig', [
            'controller_name' => 'CourseController',
        ]);
    }
}
