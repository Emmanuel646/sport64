<?php

namespace App\Form;

use App\Entity\Options;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OptionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('gestsalarie', CheckboxType::class, [
                'attr' => [
                    'class'=> 'form-check-input d-inline-block'
                ],
                'label' => 'Gérer les plannings salariés',
                'required' => false
            ])
            ->add('gestmat', CheckboxType::class, [
                'attr' => [
                    'class'=> 'form-check-input d-inline-block',
                ],
                'label' => 'Gestion du matériel en location',
                'required' => false
            ])
            ->add('gestabon', CheckboxType::class, [
                'attr' => [
                    'class'=> 'form-check-input d-inline-block',
                ],
                'label' => 'Gérer les abonnements',
                'required' => false
            ])
            ->add('geststocks', CheckboxType::class, [
                'attr' => [
                    'class'=> 'form-check-input d-inline-block',
                ],
                'label' => 'Gérer les stocks',
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Options::class,
        ]);
    }
}
