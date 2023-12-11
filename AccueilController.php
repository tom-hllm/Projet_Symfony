<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController
{
    #[Route('/accueil')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}