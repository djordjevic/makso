<?php

namespace App\Form;

use App\Entity\Dobavljac;
use App\Entity\Kategorija;
use App\Entity\Proizvod;
use App\Entity\ProizvodAtributi;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;

class ProizvodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite naziv proizvoda', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti naziv proizvoda!',
                    ]),
                ],
            ])

            ->add('kategorija', EntityType::class, [
                'required' => true,
                'class' => Kategorija::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite kategoriju'
            ])

            ->add('seller', EntityType::class, [
                'required' => true,
                'class' => Dobavljac::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite dobavljača'
            ])
            ->add('code', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite šifru proizvoda', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti šifru proizvoda!',
                    ]),
                ],
            ])
            ->add('proizvodjac', TextType::class, [
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite naziv proizvodjača', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti naziv proizvodjača!',
                    ]),
                ],
            ])
            ->add('caracteristic', TextareaType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite opis proizvoda', 'class' => 'ckeditor'],
            ])
            ->add('options', TextareaType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite opcionu opremu za traktore', 'class' => 'ckeditor'],
            ])
            ->add('charasteristicsDescription', TextareaType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite karakteristike proizvoda', 'class' => 'ckeditor'],
            ])
            ->add('deliveryCharacteristics', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite karakteristike dostave', 'class' => 'form-control'],
            ])
            ->add('weight', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite karakteristike dostave', 'class' => 'form-control'],
            ])

            ->add('active', ChoiceType::class, [
                'attr' => ['class' => 'radio-section'],
                'choices' => [' Da' => 1, ' Ne' => 0],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('priceDin', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite cenu u dinarima', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti cenu proizvoda!',
                    ]),
                ],
            ])
            ->add('priceEur', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite cenu u eurima', 'class' => 'form-control'],
            ])
            ->add('priceVpDin', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite cenu u dinarima ka pravnim licima', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti VP cenu proizvoda!',
                    ]),
                ],
            ])
            ->add('priceVpEur', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite cenu u eurima ka pravnim licima', 'class' => 'form-control'],
            ])
            ->add('taxPercentage', ChoiceType::class, [
                'attr' => ['class' => 'radio-section'],
                'choices' => [' 10 %' => 10, ' 20 %' => 20],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('deliveryPrice', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite cenu dostave', 'class' => 'form-control'],
            ])
            ->add('deliveryTime', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite vreme dostave', 'class' => 'form-control'],
            ])
            ->add('flOutOfStock', ChoiceType::class, [
                'attr' => ['class' => 'radio-section'],
                'choices' => [' Da' => 1, ' Ne' => 0],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('flNewProduct', ChoiceType::class, [
                'attr' => ['class' => 'radio-section'],
                'choices' => [' Da' => 1, ' Ne' => 0],
                'expanded' => true,
                'multiple' => false
            ])

            ->add('flDiscount', ChoiceType::class, [
                'attr' => ['class' => 'radio-section'],
                'choices' => [' Da' => 1, ' Ne' => 0],
                'expanded' => true,
                'multiple' => false
            ])

            ->add('flDiscountVp', ChoiceType::class, [
                'attr' => ['class' => 'radio-section'],
                'choices' => [' Da' => 1, ' Ne' => 0],
                'expanded' => true,
                'multiple' => false
            ])

            ->add('discountPriceDin', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite sniženu cenu u dinarima', 'class' => 'form-control'],
            ])
            ->add('discountPriceEur', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite sniženu cenu u eurima', 'class' => 'form-control'],
            ])

            ->add('discountVpPriceDin', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite sniženu cenu u dinarima ka pravnim licima', 'class' => 'form-control'],
            ])
            ->add('discountVpPriceEur', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite sniženu cenu u eurima ka pravnim licima', 'class' => 'form-control'],
            ])


            ->add('metaTitle', TextType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite naziv proizvoda za meta', 'class' => 'form-control'],
            ])
            ->add('metaDescription', TextareaType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme',  'placeholder' => 'Unesite opis proizvoda za meta', 'class' => 'form-control'],
            ])
            ->add('metaKeywords', TextType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite ključne reči proizvoda za meta', 'class' => 'form-control'],
            ])

            ->add('slikaMain', FileType::class, [
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
            ->add('slika1', FileType::class, [
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
            ->add('slika2', FileType::class, [
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
            ->add('slika3', FileType::class, [
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
            ->add('slika4', FileType::class, [
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
            ->add('slika5', FileType::class, [
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
            ->add('slika6', FileType::class, [
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
            ->add('slika7', FileType::class, [
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
            ->add('slika8', FileType::class, [
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
            ->add('slika9', FileType::class, [
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
            ->add('slika10', FileType::class, [
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
            ->add('slika11', FileType::class, [
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
            ->add('slika12', FileType::class, [
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
            ->add('slika13', FileType::class, [
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
            ->add('slika14', FileType::class, [
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
            ->add('atr1', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr2', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr3', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr4', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr5', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr6', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr7', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr8', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr9', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])
            ->add('atr10', EntityType::class, [
                'required' => false,
                'class' => ProizvodAtributi::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite atribut'
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proizvod::class,
            'constraints' => [
                new UniqueEntity(['entityClass' => Proizvod::class, 'fields' => 'code', 'message' => 'Proizvod sa ovom šifrom već postoji u bazi!'])
            ]
        ]);
    }
}