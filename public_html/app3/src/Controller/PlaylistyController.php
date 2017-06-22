<?php
/**
 * Playlisty controller.
 */
namespace Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

class PlaylistyController implements ControllerProviderInterface
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
            ->bind('playlisty_index');
        return $controller;
    }

    public function indexAction(Application $app)
    {
        return $app['twig']->render(
            'playlisty/index.html.twig'
        );
    }
}