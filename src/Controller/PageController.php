<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function homePage(): Response
    {        
        return $this->render('pages/home.html.twig');
    }

    #[Route('/a-propos', name: 'app_about')]
    public function aboutPage(): Response
    {
        return $this->render('pages/about.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contactPage(): Response
    {
        return $this->render('pages/contact.html.twig');
    }
}
