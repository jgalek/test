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
        $tresc = $request->get('tresc');
        $ocena = $request->get('ocena');

        if(null !== $token && $token->getUser() instanceof UserInterface) {
            $profilRepository = new ProfilRepository($app['db']);
            $user = $token->getUser();
            $userLogin = $user->getUsername();
            $profil = $profilRepository->findAll($userLogin);
            $play = $playRepository->save($tresc, $id, $userLogin, $ocena);
        } else {
            $profil = [];
        }

        $videRepository = new VideoRepository($app['db']);
        $play = $videRepository->findOneById($id);

        if (!$play) {
            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'warning',
                    'message' => 'message.record_not_found',
                ]
            );

            return $app->redirect($app['url_generator']->generate('play_index'));
        }

        $form = $app['form.factory']->createBuilder(FormType::class, $play)->add('id', HiddenType::class)->getForm();
        $form->handleRequest($request);

        //dump($tresc);



        return $app['twig']->render(
            'play/add.html.twig',
            [
                'profil' => $profil,
                'ocena'=>$ocena,
                'tresc' => $tresc,
                'id' => $id,
                'play' => $play,
                'form' => $form->createView(),
            ]
        );
    }
}





