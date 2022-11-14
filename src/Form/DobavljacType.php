<?php

namespace App\Form;

use App\Entity\Dobavljac;
use App\Entity\Kategorija;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;

class DobavljacType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite naziv dobavljača', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti naziv dobavljača!',
                    ]),
                ],
            ])
            ->add('image', FileType::class, [
                'attr' => ['accept' => 'image/jpeg,image/png,image/jpg', 'class' => 'form-control'],

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,
                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,
                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
//                    new File([
//                        'maxSize' => '10240k',
//                        'mimeTypes' => [
//                            'text/csv',
//                            'text/plain',
//                            'text/x-csv',
//                            'application/octet-stream'
//                        ],
//                        'mimeTypesMessage' => 'Morate uneti CSV fajl!',
//                    ])
                new Image()
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dobavljac::class,
            'constraints' => [
                new UniqueEntity(['entityClass' => Dobavljac::class, 'fields' => 'name', 'message' => 'Dobavljač već postoji u bazi!'])
            ]
        ]);
    }
}