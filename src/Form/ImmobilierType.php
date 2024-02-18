<?php

namespace App\Form;

use App\Entity\Immobilier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImmobilierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_fiscal')
            ->add('adresse')
            ->add('type')
            ->add('superficie')
            ->add('titre_prop')
            ->add('status')
            ->add('id_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Immobilier::class,
        ]);
    }
}
