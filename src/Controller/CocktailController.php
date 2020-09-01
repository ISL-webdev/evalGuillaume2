<?php


namespace App\Controller;

use App\Entity\Cocktail;
use App\Entity\Ingredients;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CocktailController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->findAll();
        return $this->render('home.html.twig', ['title'=>'Bienvenue au Storehouse', 'cocktails'=> $cocktails]);
    }

    /**
     * @Route("/cocktails/list")
     */
    public function allcocktails()
    {
        $cocktails = $this->getDoctrine()->getRepository(Cocktail::class)->findAll();
        return $this->render('cocktails/cocktails.html.twig', ['title'=>'Bienvenue au Storehouse', 'cocktails'=> $cocktails]);
    }

    /**
     * @Route("/cocktail/create")
     */
    public function create(Request $request, ObjectManager $manager)
    {
        $article = new Article();
        return $this->render('cocktails/create.html.twig', ['title'=>'Création de votre cocktail', /*'cocktail' => $cocktail*/]);
    }

    /**
     * @Route("/ingredients/list")
     */
    public function ingredients()
    {
        $ingredients = $this->getDoctrine()->getRepository(Ingredients::class)->findAll();
        return $this->render('ingredients.html.twig', ['title'=>'Liste des ingrédients', 'ingredients'=> $ingredients]);
    }
}