<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim";

        $products = [
            [
                'name' => 'Schmilblick',
                'description' => "<p>C'est dans la nuit du 21 novembre au 18 juillet de la même année que les frères Fauderche ont jeté les bases de cet extraordinaire appareil dont la conception révolutionnaire risque de bouleverser toutes les lois communément admises tant dans le domaine de la physique nucléaire que dans celui de la gynécologie dans l'espace. Voici donc, d'après la communication qu'ils viennent d'adresser à l'Académie des inscriptions sur les murs, et des belles lettres recommandées, quelles en sont les principales caractéristiques.</p>

                <p>Le Schmilblick des frères Fauderche est, il convient de le souligner, rigoureusement intégral, c'est-à-dire qu'il peut à la fois servir de Schmilblick d'intérieur, grâce à la taille réduite de ses gorgomoches, et de Schmilblick de campagne grâce à sa mostoblase et à ses deux glotosifres qui lui permettent ainsi d'urnapouiller les istioplocks même par les plus basses températures. Haut les cœurs et chapeaux bas devant cette géniale invention qui, demain ou après-demain au plus tard, fera germer le blé fécond du ciment victorieux qui ouvrira à deux battants la porte cochère d'un avenir meilleur dans le péristyle d'un monde nouveau...</p>",
                'img' => 'product1.jpg',
                'alt' => 'Une bien belle image du Schmilblick'
            ],
            [
                'name' => 'Mjöllnir',
                'description' => "<p>Marteau à manche court de Thor, le dieu de la foudre et du tonnerre. Le marteau de Thor est l'arme la plus puissante des dieux, et symbolise alors la protection de l'univers face aux forces du chaos.</p>

                <p>Cette arme fabuleuse forgée par des nains est capable de revenir à la main de son lanceur.</p>",
                'img' => 'product1.jpg',
                'alt' => 'Une photo de Mjöllnir'
            ],
            [
                'name' => 'USS Enterprise NCC-1701-D',
                'description' => "<p>Vaisseau spatial d'occasion, il fut commandé par le capitaine Jean-Luc Picard. Il a été construit dans les chantiers d’Utopia Planitia en orbite autour de Mars. La construction du navire a été supervisée par le commandeur Orfil Quinteros. L’Enterprise posséde 42 ponts et il peut avoir embarqué un équipage de 1 014 personnes. Il était considéré comme le vaisseau amiral de la Fédération.</p>

                <p>Distorsion 9,6 (Max: 9,9)</p>",
                'img' => 'product1.jpg',
                'alt' => 'Une photo de l\'Enterprise'
            ],
            [
                'name' => 'Modern Chair',
                'description' => $description,
                'img' => 'product1.jpg',
                'alt' => 'Photo du produit 1'
            ],
            [
                'name' => 'Minimalist Plant Pot',
                'description' => $description,
                'img' => 'product2.jpg',
                'alt' => 'Photo du produit 2'
            ],
            [
                'name' => 'Night Stand',
                'description' => $description,
                'img' => 'product3.jpg',
                'alt' => 'Photo du produit 3'
            ],
            [
                'name' => 'Small Table',
                'description' => $description,
                'img' => 'product4.jpg',
                'alt' => 'Photo du produit 4'
            ],
            [
                'name' => 'Modern Rocking Chair',
                'description' => $description,
                'img' => 'product5.jpg',
                'alt' => 'Photo du produit 5'
            ],
            [
                'name' => 'Metallic Chair',
                'description' => $description,
                'img' => 'product6.jpg',
                'alt' => 'Photo du produit 6'
            ],
            [
                'name' => 'Home Deco',
                'description' => $description,
                'img' => 'product3.jpg',
                'alt' => 'Photo du produit 7'
            ],
        ];

        foreach ($products as $myProduct) {
            $product = new Product();

            $product->setName($myProduct['name']);
            $product->setDescription($myProduct['description']);
            $product->setQuantity(rand(1, 500));
            $product->setPrice(rand(1, 5000) + rand(0, 10) / 10);
            $product->setCreatedAt(new \Datetime());
            $product->setUpdatedAt(new \Datetime());
            $product->setImg($myProduct['img']);
            $product->setAlt($myProduct['alt']);

            $manager->persist($product);
        }

        $manager->flush();
    }
}
