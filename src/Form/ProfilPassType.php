<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilPassType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firmaIliFizickoLice')
            ->add('nazivFirme')
            ->add('pib')
            ->add('firstName')
            ->add('lastName')
            ->add('jmbg')
            ->add('address')
            ->add('city')
            ->add('postanskiBroj')
            ->add('phone')
            ->add('mobPhone')
            ->add('time')
            ->add('active')
            ->add('firstNamePrimaoc')
            ->add('lastNamePrimaoc')
            ->add('addressPrimaoc')
            ->add('cityPrimaoc')
            ->add('postanskiBrPrimaoc')
            ->add('mobPhonePrimaoc')
            ->add('sendEmail')
            ->add('isRegistred')
            ->add('created')
            ->add('updated')
            ->add('email')
            ->add('roles')
            ->add('password')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
