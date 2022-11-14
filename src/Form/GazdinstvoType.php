<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class GazdinstvoType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('gazdinstvo', TextType::class, [
                'disabled' => true,
                'attr' => ['autocomplete' => 'firstName', 'placeholder' => 'Unesite pib', 'class' => 'form-control'],
            ])
            ->add('firstName', TextType::class, [
                'attr' => ['autocomplete' => 'firstName', 'placeholder' => 'Unesite ime', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti ime',
                    ]),
                ],
            ])
            ->add('lastName', TextType::class, [
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite prezime', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti prezime',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'attr' => ['autocomplete' => 'email', 'placeholder' => 'Unesite email', 'class' => 'form-control'],
            ])
            ->add('mobPhone', TextType::class, [
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite broj mobilnog telefona', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti broj mobilnog telefona',
                    ]),
                ],
            ])
            ->add('phone', TextType::class, [
                'required' => false,
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite broj telefona', 'class' => 'form-control'],
            ])
            ->add('address', TextType::class, [
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite adresu', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti adresu',
                    ]),
                ],
            ])
            ->add('city', TextType::class, [
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite grad', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti naziv grada',
                    ]),
                ],
            ])
            ->add('postanskiBroj', TextType::class, [
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite poštanski broj', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti poštanski broj',
                    ]),
                ],
            ])
            ->add('addressPrimaoc', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite adresu primaoca', 'class' => 'form-control'],

            ])
            ->add('cityPrimaoc', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite grad primaoca', 'class' => 'form-control'],

            ])
            ->add('postanskiBrPrimaoc', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite poštanski broj primaoca', 'class' => 'form-control'],

            ])
            ->add('firstNamePrimaoc', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite ime kontakt lica', 'class' => 'form-control'],

            ])
            ->add('lastNamePrimaoc', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite prezime kontakt lica', 'class' => 'form-control'],

            ])
            ->add('mobPhonePrimaoc', TextType::class, ['required' => false,
                'attr' => ['autocomplete' => 'lastName', 'placeholder' => 'Unesite broj mobilnog telefona primaoca', 'class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'constraints' => [
                new UniqueEntity(['entityClass' => User::class, 'fields' => 'email', 'message' => 'Email već postoji u bazi!']),
                new UniqueEntity(['entityClass' => User::class, 'fields' => 'pib', 'message' => 'PIB već postoji u bazi!'])
            ]
        ]);
    }
}