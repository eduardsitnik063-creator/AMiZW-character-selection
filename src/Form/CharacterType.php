<?php

namespace App\Form;

use App\Entity\Character;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CharacterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa postaci',
            ])
            ->add('className', TextType::class, [
                'label' => 'Klasa (np. Wojownik, Mag)',
            ])
            ->add('level', IntegerType::class, [
                'label' => 'Poziom',
            ])
            ->add('strength', IntegerType::class, [
                'label' => 'Siła',
            ])
            ->add('agility', IntegerType::class, [
                'label' => 'Zwinność',
            ])
            ->add('intelligence', IntegerType::class, [
                'label' => 'Inteligencja',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Opis (opcjonalnie)',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Character::class,
        ]);
    }
}
