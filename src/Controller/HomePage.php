<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePage extends AbstractController
{
    /**
+      * @Route("/")
+      */
    public function index(): Response
    {
        $username = 'Rémy';
        $page_title= 'Page d\'accueil';
        $notifications = ['first', 'two', 'three'];

        return $this->render('pages/home.html.twig', [
            'username' => $username,
            'page_title' => $page_title,
            'notifications' => $notifications
        ]);
    }

    /**
+      * @Route("/test")
+      */
    public function indexTest(): Response
    {
        $username = 'Rémy';
        // $page_title= 'Page d\'accueil';
        // $notifications = ['first', 'two', 'three'];

        // return $this->render('pages/home.html.twig', [
        //     'username' => $username,
        //     'page_title' => $page_title,
        //     'notifications' => $notifications
        // ]);
        return $this->json(['username' => $username]);
    }
}