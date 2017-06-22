<?php
/**
 * Profil controller.
 */
namespace Controller;

use Repository\PlayRepository;
use Repository\VideoRepository;
use Silex\Application;
use Repository\ProfilRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Form\CommentType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;



class PlayController implements ControllerProviderInterface
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
        $controller->get('/', [$this, 'indexAction'])
            ->bind('play_index');
        $controller->get('/{id}', [$this, 'viewAction'])->bind('play_index');
        $controller->match('/{id}/add', [$this, 'addAction'])
            ->method('GET|POST')
            ->assert('id', '[1-9]\d*')
            ->bind('play_add');
        return $controller;
    }

    public function indexAction(Application $app)
    {
        $playRepository = new PlayRepository($app['db']);
        $token = $app['security.token_storage']->getToken();
        if(null !== $token && $token->getUser() instanceof UserInterface) {
            //dump($token);
            $profilRepository = new ProfilRepository($app['db']);
            $user = $token->getUser();
            $userLogin = $user->getUsername();
            $profil = $profilRepository->findAll($userLogin);
        } else {
            $profil = [];
        }
        return $app['twig']->render(
            'play/index.html.twig',
            [
                'profil' => $profil,
                'play' => $playRepository->play(),
                'playlistByUser' => $playRepository->playlistByUser(),
                'userPlaylist' => $playRepository->userPlaylist(),
                'playlist' => $playRepository->playlist(),
                'playlistByGatunek' => $playRepository->playlistByGatunek(),
                'comments' => $playRepository->comments()
            ]
        );
    }


    public function viewAction(Application $app, $id)
    {
        $playRepository = new PlayRepository($app['db']);
        $token = $app['security.token_storage']->getToken();

        if(null !== $token && $token->getUser() instanceof UserInterface) {
            //dump($token);
            $profilRepository = new ProfilRepository($app['db']);
            $user = $token->getUser();
            $userLogin = $user->getUsername();
            $profil = $profilRepository->findAll($userLogin);
        } else {
            $profil = [];
        }
        return $app['twig']->render(
            'play/index.html.twig',
            [
                'profil' => $profil,
                'id' => $id,
                'play' => $playRepository->findOneById($id),
                'comments' => $playRepository->comments($id)
            ]
        );
    }

    public function addAction(Application $app, $id, Request $request)
    {
        $playRepository = new PlayRepository($app['db']);

        $token = $app['security.token_storage']->getToken();
        if(null !== $token && $token->getUser() instanceof UserInterface) {
            $profilRepository = new ProfilRepository($app['db']);
            $user = $token->getUser();
            $userLogin = $user->getUsername();
            $profil = $profilRepository->findAll($userLogin);
        }

        $play = [];

        $form = $app['form.factory']->createBuilder(CommentType::class, $play)->getForm();
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $play = $form->getData();
            $tresc = $play['tresc'];
            $ocena = $play['ocena'];
            $play = $playRepository->save($tresc, $id, $userLogin, $ocena);
           // dump($play);
        } else {
            $profil = [];
        }

       return $app['twig']->render(
            'play/add.html.twig',
            [
                'id' => $id,
                'profil' => $profil,
                'play' => $play,
                'form' => $form->createView(),
            ]
        );
    }
}





