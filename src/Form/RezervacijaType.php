<?php

namespace App\Form;


use App\Entity\Rezervacija;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RezervacijaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ime', TextType::class, [
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite Vaše ime', 'class' => 'form-control']
            ])
            ->add('email', EmailType::class, [
                'attr' => ['autocomplete' => 'email', 'placeholder' => 'Unesite Vaš email', 'class' => 'form-control'],
            ])
            ->add('mobilni', TextType::class, [
                'attr' => ['autocomplete' => 'mobilni', 'placeholder' => 'Unesite Vaš broj telefona', 'class' => 'form-control'],
            ])
            ->add('startDate', DateType::class, [
                'attr' => ['class' => 'form-control'],
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ])
            ->add('endDate', DateType::class, [
                'attr' => ['class' => 'form-control'],
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rezervacija::class,
        ]);
    }
}