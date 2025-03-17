<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\BooleanType;
use Symfony\Component\Validator\Constraints\NotBlank;

class ProjectType extends AbstractType
{
    private $hobby ;
    private $gender ;
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
    $builder
            ->add('name')
            ->add('lastname')
            ->add('age')
            ->add('description')
            ->add('hobby', ChoiceType::class, [
                'choices' => [
                    'Read' => 'read',
                    'Write' => 'write',
                    'Swim' => 'swim',
                    'Dance' => 'dance',
                ],
                'multiple' => true, 
                'required' => false, 
                'expanded' => true, 
                'mapped' => true, 
            ])
            ->add('gender', ChoiceType::class, [
                'choices' => [      
                    'male' => 'male',
                    'female' => 'female',
                    'other' => 'other',
                ],
                'expanded' => true, 
                'mapped' => true,  
            ])       
            ->add('email', EmailType::class, array(
                'required' => true,
                'constraints' => array(
                    new NotBlank(),
                )))
            ->add('status', ChoiceType::class, array(
                    'choices' => array(
                        'active' => 1,
                        'inactive' => 0
                     ),
                     'label' => 'status',
                     'required' => true,

                 ))
            ->add('role', ChoiceType::class, [
                    'choices' => [
                        'ROLE_USER' => 'ROLE_USER',
                        'ROLE_ADMIN' => 'ROLE_ADMIN',
                        'ROLE_MANAGER' => 'ROLE_MANAGER',
                    ],
                    'multiple' => false,  
                    'expanded' => true, 
                ])
            ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
