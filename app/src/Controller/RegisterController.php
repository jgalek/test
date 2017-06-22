<?php
/**
 * Playlisty controller.
 */
namespace Controller;

use Repository\RegisterRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Form\RegisterType;
use Repository\ProfilRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class RegisterController implements ControllerProviderInterface
{
    /**
     * Routing settings.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return \Silex\ControllerCollection Result
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('/add', [$this, 'addAction'])
            ->method('GET|POST')
            ->bind('register_add');

        $controller->get('/edit', [$this, 'editAction'])
            ->bind('register_index');
        $controller->post('/edit', [$this, 'editAction'])
            ->bind('register_edit');
        return $controller;
    }

    public function indexAction(Application $app)
    {
        return $app['twig']->render(
            'register/index.html.twig'
        );
    }

    public function addAction(Application $app, Request $request)
    {
        $registerRepository = new RegisterRepository($app['db']);
        $token = $app['security.token_storage']->getToken();

        $register = [];
        $form = $app['form.factory']->createBuilder(RegisterType::class, $register)->getForm();
        $form->handleRequest($request);

        //$login = $request->get('register_type_login');
        //$password = $request->get('register_type_password');
        //$pseudonim = $request->get('register_type_pseudonim');
        //dump($login);
        //dump($password);
        //dump($pseudonim);



        if ($form->isSubmitted() && $form->isValid()) {
            $login = $form->get('login');
            $password = $form->get('password');
            $pseudonim = $form->get('pseudonim');
            $name=$form->get('name');
            $surname = $form->get('surname');
            $birthday = $form->get('birthday');
            $info = $form ->get('info');
            $age = $form->get('age');


            //$password = $app['security.encoder.bcrypt']->encodePassword($register['password']);

            $register  = $form->getData();


            $registerRepository->save($register, $app);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.element_successfully_added',
                ]
            );

            return $app->redirect($app['url_generator']->generate('register_index'), 301);
        }



        return $app['twig']->render(
            'register/add.html.twig',
            [
                'register' => $register,
                'form' => $form->createView(),
            ]
        );
    }


    public function editAction(Application $app, Request $request)
    {
        $registerRepository = new RegisterRepository($app['db']);
        $token = $app['security.token_storage']->getToken();

        //$login = $request->get('register_type_login');
        //$password = $request->get('register_type_password');
        //$pseudonim = $request->get('register_type_pseudonim');
        //dump($login);
        //dump($password);
        //dump($pseudonim);


        if(null !== $token && $token->getUser() instanceof UserInterface) {
            $profilRepository = new ProfilRepository($app['db']);
            $user = $token->getUser();
            $userLogin = $user->getUsername();
            $profil = $profilRepository->findAll($userLogin);
            $form = $app['form.factory']->createBuilder(RegisterType::class, $profil)->getForm();
            $form->handleRequest($request);
        }else {
            $profil = [];
            $form = $app['form.factory']->createBuilder(RegisterType::class, $profil)->getForm();
            $form->handleRequest($request);
        }

        $register = [];

        if ($form->isSubmitted() && $form->isValid()) {

            $register  = $form->getData();


            $registerRepository->edit($register, $userLogin, $app);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.element_successfully_added',
                ]
            );

            return $app->redirect($app['url_generator']->generate('register_index'), 301);
        }
        return $app['twig']->render(
            'register/edit.html.twig',
            [
                'profil' => $profil,
                'register' => $register,
                'form' => $form->createView(),
            ]
        );
    }



}