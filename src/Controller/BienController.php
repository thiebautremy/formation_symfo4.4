<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Bien;
use DateTime;

class BienController extends AbstractController 
{
    /**
     * Undocumented function
     *  @Route("/bien", name="bien-route")
     * @return Response
     */ 
    public function index(): Response 
    {
        $repository = $this->getDoctrine()->getRepository(Bien::class);
        $bien= $repository->findAll();
        return $this->render('pages/bien.html.twig', [
            'bien' => $bien
        ]);
    }
}