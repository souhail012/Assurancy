<?php

namespace App\Form;

use App\Entity\Vehicule;
use App\Enum\typeVeh;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matricule')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Voiture' => typeVeh::V,
                    'Moto' => typeVeh::M,
                    'Camion' => typeVeh::C,
                    'Bateau' => typeVeh::B,
                ],
                'placeholder' => 'Sélectionnez le type de véhicule',
            ])
            ->add('modele',  ChoiceType::class, [
                'choices' => [
                    'Ford' => 'Ford',
                    'Toyota' => 'Toyota',
                    'Honda' => 'Honda',
                    'BMW' => 'BMW',
                    'Mercedes' => "Mercedes",
                    'Range Rover' => "Range Rover",
                    'Kia' => "Kia",
                    "Ibiza" => "Ibiza",
                    "Hyundai" => "Hyundai",
                    "Haval" => "Haval",
                    "Symbole" => "Symbole",
                    "Clio" => "clio",
                    "Citroen" => "Citroen",
                ],
                'placeholder' => 'Veuillez choisir une marque de véhicule valide',
                ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix Unitaire',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Champs Prix  est obligatoire'
                    ] ),
                    new Positive([
                        'message' => 'Prix  doit etre positive'
                    ] )
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('carte_grise' ,FileType::class, [
                'label' => 'Image',
                'required' => false, // Set to true if the image is mandatory
                'mapped' => false, // This tells Symfony not to try to map this field to any entity property
            ])
            ->add('status')
            ->add('id_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}
