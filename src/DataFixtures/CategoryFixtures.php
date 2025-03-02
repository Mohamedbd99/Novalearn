<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [
            ['nom' => 'Problème technique', 'description' => 'Problèmes liés au fonctionnement technique de la plateforme'],
            ['nom' => 'Question pédagogique', 'description' => 'Questions sur le contenu des cours et l\'apprentissage'],
            ['nom' => 'Suggestion d\'amélioration', 'description' => 'Suggestions pour améliorer la plateforme'],
            ['nom' => 'Autre', 'description' => 'Autres types de réclamations'],
        ];

        foreach ($categories as $categoryData) {
            $category = new Category();
            $category->setNom($categoryData['nom']);
            $category->setDescription($categoryData['description']);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
