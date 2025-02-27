<?php

namespace App\Form;

use App\Entity\Employee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\Persistence\ManagerRegistry;

class EmployeeType extends AbstractType
{
    public function __construct(private ManagerRegistry $doctrine) {}
    private $hobbies;
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       // $form->get($item['name'])->setData(implode(', ', $chosen));
        $builder
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('age', IntegerType::class)
           
            ->add('hobby', ChoiceType::class, array(
                'choices' => array(
                    'read' => 'read',
                    'write' => 'write'
                ),
                'label' => 'hobbies :',
                'expanded' => true,
                'multiple' => true
            ))
            //$hobby=setHobby(implode(',',$hobby));
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'male' => 'male',
                    'female' => 'female'
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
            ->add('created_at', TextType::class)
            ->add('updated_at', TextType::class);       
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
