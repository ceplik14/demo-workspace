<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Button;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null,['attr' => ['placeholder'=> 'Jméno a Příjmení']])
            ->add('email', null,['attr' => ['placeholder'=> 'E-mail']])
            ->add('subject', null,['attr' => ['placeholder'=> 'Předmět']])
            ->add('text', null,['attr' => ['placeholder'=> 'Text']])
            ->add('Poslat', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
