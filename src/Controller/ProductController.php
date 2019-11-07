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
            'page' => 'home',
        ]);
    }

    /**
     * @Route("/shop", name="shop")
     */
    public function shop()
    {
        return $this->render('product/shop.html.twig', [
            'page' => 'shop',
        ]);
    }

    /**
     * @Route("/product-{id}", name="product")
     */
    public function product($id)
    {
        return $this->render('product/product.html.twig', [
            'page' => 'product',
        ]);
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cart()
    {
        return $this->render('product/cart.html.twig', [
            'page' => 'cart',
        ]);
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function checkout()
    {
        return $this->render('product/checkout.html.twig', [
            'page' => 'checkout',
        ]);
    }
}
