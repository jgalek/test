<?php
/**
 * HearIt controller.
 */
namespace Controller;

use Repository\HearItRepository;
use Repository\ProfilRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

class HearItController implements ControllerProviderInterface
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
            ->bind('hearIt_index');
        return $controller;
    }

    public function indexAction(Application $app)
    {
        //dump($app['security.encoder.bcrypt']->encodePassword('admin', ''));
        //dump($app['security.encoder.bcrypt']->encodePassword('test1', ''));
        $hearItRepository = new HearItRepository($app['db']);
        $token = $app['security.token_storage']->getToken();
        if(null !== $token && $token->getUser() instanceof UserInterface) {
            $profilRepository = new ProfilRepository($app['db']);
            $user = $token->getUser();
            $userLogin = $user->getUsername();
            $profil = $profilRepository->findAll($userLogin);
        } else {
            $profil = [];
        }

            return $app['twig']->render(
                'hearIt/index.html.twig',
                [   'hearIt' => $hearItRepository->highestScore(),
                    'playlistByUser' => $hearItRepository->playlistByUser(),
                    'userPlaylist' => $hearItRepository->userPlaylist(),
                    'playlist' => $hearItRepository->playlist(),
                    'profil' => $profil,
                    'playlistByGatunek' => $hearItRepository->playlistByGatunek()
                ]
            );
    }

    public function viewAction(Application $app, $gatunek)
    {
        dump($id);
        $hearItRepository = new HearItRepository($app['db']);
        return $app['twig']->render(
            'hearIt/index.html.twig',
            [
                'gatunek' => $gatunek,
                'playlistByGatunek' => $hearItRepository->playlistByGatunek($gatunek),
            ]
        );
    }
}