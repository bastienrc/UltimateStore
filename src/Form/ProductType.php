<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('enabled', CheckboxType::class)
            ->add('name', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => ['class' => 'form-control validate']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du produit',
                'attr' => ['class' => 'form-control validate', 'rows' => '5']
            ])
            ->add('quantity', TextType::class, [
                'label' => 'Quantité',
                'attr' => ['class' => 'form-control validate']
            ])
            ->add('price', TextType::class, [
                'label' => 'Prix',
                'attr' => ['class' => 'form-control validate']
            ])
            // ->add('img', TextType::class)
            ->add('alt', TextType::class, [
                'label' => 'Texte alternative de l\'image',
                'attr' => ['class' => 'form-control validate']
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregister le produit',
                'attr' => [
                    'class' => 'btn btn-primary btn-block text-uppercase',
                    'type' => 'submit'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
