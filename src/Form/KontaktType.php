<?php

namespace App\Form;

use App\Entity\Kontakt;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class KontaktType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('email', EmailType::class, ['required' => true])
            ->add('title', TextType::class, ['required' => true])
            ->add('message', TextareaType::class, ['required' => true])
            ->add('captcha', CaptchaType::class, ['width' => 80, 'height' => 40, 'length' => 4, 'background_color' => [184, 184, 184], 'distortion' => false, 'invalid_message' => '']);;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(['data_class' => Kontakt::class,]);
    }
}
