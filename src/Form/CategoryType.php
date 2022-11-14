<?php

namespace App\Form;

use App\Entity\Kategorija;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class CategoryType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite naziv kategorije', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Morate uneti naziv kategorije!',
                    ]),
                ],
            ])
            ->add('parentCategoryId', EntityType::class, [
                'required' => false,
                'class' => Kategorija::class,
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (EntityRepository $kr) {
                    return $kr->createQueryBuilder('k')
                        ->orderBy('k.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Izaberite kategoriju'
            ])
            ->add('description', TextareaType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite opis kategorije', 'class' => 'ckeditor'],
            ])
            ->add('active', ChoiceType::class, [
                'attr' => ['class' => 'radio-section'],
                'choices' => [' Da' => 1, ' Ne' => 0],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('metaTitle', TextType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite naziv kategorije za meta', 'class' => 'form-control'],
            ])
            ->add('metaDescription', TextareaType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme',  'placeholder' => 'Unesite opis kategorije za meta', 'class' => 'form-control'],
            ])
            ->add('metaKeywords', TextType::class, [ 'required' => false,
                'attr' => ['autocomplete' => 'nazivFirme', 'placeholder' => 'Unesite ključne reči kategorije za meta', 'class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void {
        $resolver->setDefaults([
            'data_class' => Kategorija::class,
            'constraints' => [
                new UniqueEntity(['entityClass' => Kategorija::class, 'fields' => 'name', 'message' => 'Kategorija već postoji u bazi!'])
            ]
        ]);
    }
}
