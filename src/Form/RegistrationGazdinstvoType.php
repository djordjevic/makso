<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationGazdinstvoType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('firmaIliFizickoLice',HiddenType::class, [
                'data' => 4,
            ])
            ->add('gazdinstvo', TextType::class, [
                'attr' => ['autocomplete' => 'pib', 'placeholder' => 'Unesite broj gazdinstva', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Morate uneti broj gazdinstva!']),
                ],
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
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'attr' => ['autocomplete' => 'new-password', 'placeholder' => 'Unesite novu lozinku', 'class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Unesite novu lozinku!',
                        ]),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Vaša lozinka mora sadržati najmanje {{ limit }} karaktera!',
                            // max length allowed by Symfony for security reasons
                            'max' => 4096,
                        ]),
                    ],
                    'label' => 'Nova lozinka',
                ],
                'second_options' => [
                    'attr' => ['autocomplete' => 'new-password', 'placeholder' => 'Ponovite lozinku', 'class' => 'form-control'],
                    'label' => 'Ponovite lozinku!',
                ],
                'invalid_message' => 'Lozinke moraju biti iste!',
                // Instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void {
        $resolver->setDefaults([
            'data_class' => User::class,
            'constraints' => [
                new UniqueEntity(['entityClass' => User::class, 'fields' => 'email', 'message' => 'Email već postoji u bazi!']),
                new UniqueEntity(['entityClass' => User::class, 'fields' => 'gazdinstvo', 'message' => 'Broj gazdinstva već postoji u bazi!'])
            ]
        ]);
    }
}
