<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Validator\Constraints\File;
use Doctrine\Persistence\ManagerRegistry;



class ProjectType extends AbstractType
{
    public function __construct(private ManagerRegistry $doctrine) {}
    private $hobbies;
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('name')
            ->add('description')
            ->add('document',FileType::class,array('data_class' => null))
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
  
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
