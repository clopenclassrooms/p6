<?php

namespace App\Form;

use App\Entity\Illustration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class IllustrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'img',
                FileType::class,
                [
                'label' => 'Image (PDF file)',
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File(
                        [
                        'maxSize' => '2024k',
                        'mimeTypes' => [
                            'image/bmp',
                            'image/gif',
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid document',
                    ]
                    )
                ],
            ]
            )
            ->add('fileName')
            ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Illustration::class,
        ]);
    }
}
