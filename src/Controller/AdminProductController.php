<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminProductController extends AbstractController
{
    /**
     * @Route("/admin/", name="admin")
     */
    public function index()
    {
        return $this->render('admin/product/dashboard.html.twig', [
            'controller_name' => 'AdminProductController',
        ]);
    }


    /**
     * @Route("/admin/product", name="adminProduct")
     */
    public function list(ProductRepository $productRepository)
    {
        $products = $productRepository->findAll();

        return $this->render('admin/product/list.html.twig', [
            'products' => $products
        ]);
    }


    /**
     * @Route("/admin/product/create", name="adminProductCreate")
     */
    public function create(Request $request)
    {
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $product = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('adminProduct');
        }

        return $this->render('admin/product/edit.html.twig', [
            'title' => 'Créer un produit',
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/admin/product/read-{id}", name="adminProductRead")
     */
    public function read($id, ProductRepository $productRepository)
    {
        $product = $productRepository->find($id);

        return $this->render('admin/product/read.html.twig', [
            'product' => $product
        ]);
    }


    /**
     * @Route("/admin/product/edit-{id}", name="adminProductEdit")
     */
    public function edit(Request $request, ProductRepository $productRepository, $id)
    {
        $product = $productRepository->find($id);

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $product = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('adminProduct');
        }

        return $this->render('admin/product/edit.html.twig', [
            'title' => 'Edition du produit',
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/admin/product/del-{id}", name="adminProductDel")
     */
    public function delete(ObjectManager $manager, ProductRepository $productRepository, $id)
    {
        $product = $productRepository->find($id);

        $manager->remove($product);
        $manager->flush();

        return $this->redirectToRoute('adminProduct');
    }
}
