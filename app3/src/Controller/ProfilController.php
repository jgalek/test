<?php
/**
 * Profil controller.
 */
namespace Controller;

use Repository\ProfilRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;


class ProfilController implements ControllerProviderInterface
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
            ->bind('profil_index');
        $controller->get('/{id}', [$this, 'viewAction'])->bind('hearIt_view');
        return $controller;
    }

    public function indexAction(Application $app)
    {
        $profilRepository = new ProfilRepository($app['db']);
        $token = $app['security.token_storage']->getToken();
        if(null !== $token && $token->getUser() instanceof UserInterface) {
            $user = $token->getUser();
            $userLogin = $user->getUsername();
            dump($userLogin);
            dump($user);

            }

        return $app['twig']->render(
            'profil/index.html.twig',
            [
            'profil' => $profilRepository->findAll($userLogin),
            'userVideo' => $profilRepository->userVideo($userLogin),
            'userPlaylist' => $profilRepository->userPlaylist($userLogin),
            'playlist' => $profilRepository->playlist($userLogin),
            'userHighestScore' => $profilRepository->userHighestScore($userLogin)
            ]
        );
    }


}