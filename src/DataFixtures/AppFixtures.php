<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setName('Traductor 3000');
        $product->setDescription('Produit indescriptible');
        $product->setQuantity(rand(1, 500));
        $product->setPrice(rand(1, 5000) + rand(0, 10) / 10);
        $product->setCreatedAt(new \Datetime());
        $product->setUpdatedAt(new \Datetime());
        $product->setImg('defaut.jpg');
        $product->setAlt('Image du produit');

        $manager->persist($product);
        $manager->flush();
    }
}
