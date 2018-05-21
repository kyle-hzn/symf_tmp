<?php

namespace App\Form;

use App\Entity\Pool;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PoolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', TextType::class, array('label' => 'Type de piscine', 'attr' => array('class' => 'form-input')))
            ->add('name', TextType::class, array('label' => 'Nom du domaine', 'attr' => array('class' => 'form-input')))
            ->add('price', TextType::class, array('label' => 'Prix/jour et personne', 'attr' => array('class' => 'form-input')))
            ->add('imageFile', VichImageType::class,     array('label' => 'Photo du domaine', 'attr' => array('class' => 'form-input')))
            ->add('longitude', TextType::class, array('label' => 'Localisation longititude', 'attr' => array('class' => 'form-input')))
            ->add('latitude', TextType::class, array('label' => 'Localisation latitude', 'attr' => array('class' => 'form-input')))
            ->add('tobogan', CheckboxType::class, array('label'=> 'Jeux type tobogan ?', 'attr' => array('class' => 'form-input')))
            ->add('towels', CheckboxType::class, array('label'=> 'Serviettes ?', 'attr' => array('class' => 'form-input')))
            ->add('barbecue', CheckboxType::class, array('label'=> 'Barbecue ?', 'attr' => array('class' => 'form-input')))
            ->add('kidsGames', CheckboxType::class, array('label'=> 'Pataugeoir ?', 'attr' => array('class' => 'form-input')))
            ->add('shower', CheckboxType::class, array('label'=> 'Douches ?', 'attr' => array('class' => 'form-input')))
            ->add('chair', CheckboxType::class, array('label'=> 'Sièges transat ?', 'attr' => array('class' => 'form-input')))
            ->add('fridge', CheckboxType::class, array('label'=> 'Réfrégirateur ?', 'attr' => array('class' => 'form-input')))
            ->add('heat', CheckboxType::class, array('label'=> 'Chauffages ?', 'attr' => array('class' => 'form-input')))
            ->add('pingPong', CheckboxType::class, array('label'=> 'Table de Ping-Pong, Billard ?', 'attr' => array('class' => 'form-input')))
            ->add('restauration', CheckboxType::class, array('label'=> 'Restauration ?', 'attr' => array('class' => 'form-input')))
            ->add('pets', CheckboxType::class, array('label'=> 'Animaux tolérés ?', 'attr' => array('class' => 'form-input')))
            ->add('smoke', CheckboxType::class, array('label'=> 'Fumeurs tolérés ?', 'attr' => array('class' => 'form-input')))
            ->add('calm', CheckboxType::class, array('label'=> 'Environnement calme ?', 'attr' => array('class' => 'form-input')))
            ->add('kidsFree', CheckboxType::class, array('label'=> 'Gratuit pour les enfants de moins de 8 ans ?', 'attr' => array('class' => 'form-input')))
            ->add('kids', CheckboxType::class, array('label'=> 'Enfants ?', 'attr' => array('class' => 'form-input')))
            ->add('ownerPresence', CheckboxType::class, array('label'=> 'Présence des propriétaires', 'attr' => array('class' => 'form-input')))
            ->add('slug', TextType::class, array('label'=> 'Slug', 'attr' => array('class' => 'form-input')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pool::class,
        ]);
    }
}
