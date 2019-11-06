<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('product/home.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/shop", name="shop")
     */
    public function shop()
    {
        return $this->render('product/shop.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/product-{id}", name="product")
     */
    public function product($id)
    {
        return $this->render('product/product.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cart()
    {
        return $this->render('product/cart.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function checkout()
    {
        return $this->render('product/checkout.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
