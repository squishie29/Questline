<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Categorie;
use PhpParser\Node\Scalar\MagicConst\File;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*$builder
            ->add('image')
            ->add('nom')
            ->add('destination')
            ->add('prix')
            ->add('categorie')
        ;
        */
        $builder->add('image',
            FileType::class, [
                'label' => 'Content( image)',
                'mapped' => false,
                'required'=> false
            ])->add('nom')->add('destination')->add('prix')
            ->add('categorie',EntityType::class,
                array('class'=> Categorie::class,
                    'choice_label'=>'nom',
                    'disabled'   => false
                ) )
            ->add('nbr_places')
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
