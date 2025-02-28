<?php

namespace App\Form;

use App\Entity\Employee;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\Persistence\ManagerRegistry;
class EmployeeType extends AbstractType
{
    public function __construct(private ManagerRegistry $doctrine) {}
    private $hobbies;
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('age', IntegerType::class)

            ->add('hobby', ChoiceType::class, array(
                'choices' => array(
                    'read' => 'read',
                    'write' => 'write',
                    'swim'=>'swim',
                    'dance'=>'dance',
                ),
                'label' => 'hobbies :',
                'expanded' => true,
                'multiple' => true
            ))

            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'select'=>'select',
                    'male' => 'male',
                    'female' => 'female',
                    'other'=>'other',
                ),
            ))
            ->add('about_me', TextareaType::class, [
                'required' => false
            ])
            ->add('salary', IntegerType::class)

            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'admin',
                    'User' => 'user',
                ],
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('city', TextType::class)
            ->add('salary',TextType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
