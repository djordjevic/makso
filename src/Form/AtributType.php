<?php

namespace App\Form;

use App\Entity\Dobavljac;
use App\Entity\Kategorija;
use App\Entity\ProizvodAtributi;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;

class AtributType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite naziv atributa', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti naziv atributa!',
                    ]),
                ],
            ])
            ->add('kategorija', EntityType::class, [
                'required' => true,
                'class' => Kategorija::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->andWhere("k.parentCategoryId IS NULL")
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite kategoriju'
            ])
            ->add('active', ChoiceType::class, [
                'attr' => ['class' => 'radio-section'],
                'choices' => [' Da' => 1, ' Ne' => 0],
                'expanded' => true,
                'multiple' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProizvodAtributi::class,
            'constraints' => [
                new UniqueEntity(['entityClass' => ProizvodAtributi::class, 'fields' => 'name', 'message' => 'Atribut već postoji u bazi!'])
            ]
        ]);
    }
}