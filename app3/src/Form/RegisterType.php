<?php
/**
 * Tag type.
 */
namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints as Assert;



use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

/**
 * Class TagType.
 *
 * @package Form
 */
class RegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add(
            'login',
            EmailType::class,
            [
                'label' => 'label.login',
                'required' => !(isset($options['data']) && isset($options['data']['id'])),
                'attr' => [
                    'max_length' => 128,
                    'readonly' => (isset($options['data']) && isset($options['data']['id'])),
                ],
            ]
        );
        dump($options['data']);
        $builder->add(
            'password',
            PasswordType::class,
            [
                'label' => 'label.password',
                'required' => true,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );
        $builder->add(
            'pseudonim',
            TextType::class,
            [
                'label' => 'label.pseudonim',
                'required' => true,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );
        $builder->add(
            'name',
            TextType::class,
            [
                'label' => 'label.name',
                'required' => false,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );
        $builder->add(
            'surname',
            TextType::class,
            [
                'label' => 'label.surname',
                'required' => false,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );
        $builder->add(
            'birthday',
            BirthdayType::class,
            [
                'label' => 'label.birthday',
                'required' => false,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );

        $builder->add(
            'info',
            TextareaType::class,
            [
                'label' => 'label.info',
                'required' => false,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );

        $builder->add(
            'age',
            IntegerType::class,
            [
                'label' => 'label.age',
                'required' => false,
                'attr' => [
                    'max_length' => 128,
                ],
            ]
        );
/*
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();
                dump($data);

                $normData = $form->getNormData();
                dump($normData);

                if (isset($normData['id'])) {
                    $data['login'] = isset($normData['login']) ? $normData['login'] : '';
                    $event->setData($data);
                }
            }
        );
*/
    }


    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'register_type';
    }
}