<?php

namespace App\DataFixtures;

use App\Entity\Cocktail;
use App\Entity\Categories;
use App\Entity\Ingredients;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 1; $i <= 20; $i++) {
            $cocktail = new Cocktail();
            $cocktail->setNom('cocktail '.$i);
            $cocktail->setDescription('Description du cocktail');
            $cocktail->setPrix(mt_rand(5, 15));
            $cocktail->setOrigine('Origine du cocktail');
            $cocktail->setImageUrl('https://loremflickr.com/640/360');
            $manager->persist($cocktail);
        }

        for ($j = 1; $j <= 6; $j++) {
            $categorie = new Categories();
            $categorie->setNom('Catégorie n° '.$j);
            $categorie->setDescription('Description de la catégorie');
            $manager->persist($categorie);
        }

        for ($k = 1; $k <= 60; $k++) {
            $ingredient = new Ingredients();
            $ingredient->setNom('Ingrédient '.$k);
            $ingredient->setDescription('Description de cet ingrédient');
            $manager->persist($ingredient);
        }

        $manager->flush();
    }
}
