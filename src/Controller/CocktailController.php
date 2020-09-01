<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CocktailController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("First page.");
    }

    /**
     * @Route("/cocktail/create")
     */
    public function create()
    {
        return $this->render('cocktails/create.html.twig', ['title'=>'Bienvenue', 'spanHeader'=>'Cocktails', /*'cocktail' => $cocktail*/]);
    }
}