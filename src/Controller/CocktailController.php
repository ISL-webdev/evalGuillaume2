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
        return $this->render('home.html.twig', ['title'=>'Bienvenue au Storehouse']);
    }

    /**
     * @Route("/cocktail/create")
     */
    public function create()
    {
        return $this->render('cocktails/create.html.twig', ['title'=>'Création de votre cocktail', /*'cocktail' => $cocktail*/]);
    }
}