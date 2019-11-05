<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminProductController extends AbstractController
{
    /**
     * @Route("/admin/product", name="admin_product")
     */
    public function index()
    {
        return $this->render('admin_product/index.html.twig', [
            'controller_name' => 'AdminProductController',
        ]);
    }
}
