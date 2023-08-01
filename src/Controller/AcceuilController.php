<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{

    #[Route('/about', name: 'A-PROPOS')]
    public function index(): Response
    {
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'AcceuilController',
        ]);
    }

    #[Route('/', name: 'home-page')]
    public function home()
    {
        return $this->render('acceuil/home.html.twig');
//            , [
//            'title' => "Bienvenue a vous sur mon portfolio",
//            'age' => 31
//        ]);
    }

    #[Route('/about/12', name: 'blog_show')]
    public function show()
    {
        return $this->render('acceuil/show.html.twig');
    }
}
