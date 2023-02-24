<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label'=>'Quel nom souhaitez-vous donner à votre adresse',
                'attr'=>[
                    'placeholder'=>'Nommez votre adresse'
                ]
            ])
            ->add('firstname', TextType::class,[
                'label'=>'Votre prénom',
                'attr'=>[
                    'placeholder'=>'Entrer votre prénom'
                ]
            ])
            ->add('lastname', TextType::class,[
                'label'=>'Votre nom',
                'attr'=>[
                    'placeholder'=>'Entrer votre nom'
                ]
            ])
            ->add('ccompany', TextType::class,[
                'label'=>'Votre société',
                'required'=>false,
                'attr'=>[
                    'placeholder'=>'Entrer votre société'
                ]
            ])
            ->add('adress', TextType::class,[
                'label'=>'Votre adresse',
                'attr'=>[
                    'placeholder'=>'Entrer votre adress'
                ]
            ])
            ->add('postal', TextType::class,[
                'label'=>'Votre code postal',
                'attr'=>[
                    'placeholder'=>'Entrer votre code postal'
                ]
            ])
            ->add('city', TextType::class,[
                'label'=>'Votre ville',
                'attr'=>[
                    'placeholder'=>'Entrer votre ville'
                ]
            ])
            ->add('country', CountryType::class,[
                'label'=>'Pays',
                'attr'=>[
                    'placeholder'=>'Votre pays',
                    'class'=>'form-select'
                ]
            ])
            ->add('phone', TelType::class,[
                'label'=>'Votre téléphone',
                'attr'=>[
                    'placeholder'=>'Entrer votre téléphone'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr'=>[
                    'class' => 'btn-block btn-info'
                ]

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
