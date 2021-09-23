<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/", name="acceuil")
     */
    public function index(): Response
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy([],['id' => 'desc'], 1);

        return $this->render('acceuil/index.html.twig', 
                ['article' => $articles]);
    }
}
