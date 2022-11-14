<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class OrderType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('imePrimaoca', TextType::class, [
                'attr' => ['placeholder' => 'Unesite ime primaoca', 'class' => 'form-control'],
                'required' => true,
                'constraints' => [new NotBlank(['message' => 'Morate uneti ime primaoca!'])]])
            ->add('prezimePrimaoca', TextType::class, [
                'attr' => ['placeholder' => 'Unesite prezime primaoca', 'class' => 'form-control'],
                'required' => true, 'constraints' => [new NotBlank(['message' => 'Morate uneti prezime primaoca!'])]])
            ->add('emailPrimaoca', EmailType::class, [
                'attr' => ['placeholder' => 'Unesite email primaoca', 'class' => 'form-control'],
                'required' => true, 'constraints' => [new NotBlank(['message' => 'Morate uneti email primaoca!'])]])
            ->add('adresaPrimaoca', TextType::class, [
                'attr' => ['placeholder' => 'Unesite adresu primaoca', 'class' => 'form-control'],
                'required' => true, 'constraints' => [new NotBlank(['message' => 'Morate uneti adresu primaoca!'])]])
            ->add('gradPrimaoca', TextType::class, [
                'attr' => ['placeholder' => 'Unesite grad primaoca', 'class' => 'form-control'],
                'required' => true, 'constraints' => [new NotBlank(['message' => 'Morate uneti ime grada primaoca!'])]])
            ->add('pttPrimaoca', TextType::class, [
                'attr' => ['placeholder' => 'Unesite poštanski broj primaoca', 'class' => 'form-control'],
                'required' => true, 'constraints' => [new NotBlank(['message' => 'Morate uneti poštanski broj grada primaoca!'])]])
            ->add('napomenaAdmin', TextType::class, [
                'attr' => ['placeholder' => 'Unesite napomenu za administratore', 'class' => 'form-control'],
                'required' => false])
            ->add('nacinPlacanja', ChoiceType::class, [
                'attr' => ['placeholder' => 'Unesite napomenu za administratore', 'class' => 'form-control'],
                'choices'  => [
                    'Pouzeće' => 1,
                    'Čekovi' => 2,
                    'Uplata na račun' => 4
                ],
            ])

            ->add('telefonPrimaoca', TextType::class, [
                'attr' => ['placeholder' => 'Unesite broj telefona primaoca', 'class' => 'form-control'],
                'required' => true, 'constraints' => [new NotBlank(['message' => 'Morate uneti broj telefona primaoca!'])]]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(['data_class' => Order::class,]);
    }
}
