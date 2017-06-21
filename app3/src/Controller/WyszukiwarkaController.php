<?php
/**
 * Wyszukiwarka controller.
 */
namespace Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\WyszukiwarkaRepository;
use Form\WyszukiwarkaType;

class WyszukiwarkaController implements ControllerProviderInterface
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
        $controller->match('/', [$this, 'indexAction'])
            ->method('POST|GET')
            ->bind('wyszukiwarka_index');
        $controller->match('/seachResult', [$this, 'searchAction'])
            ->method('GET')
            ->bind('wyszukiwarka_sresult');
        return $controller;
    }

    public function indexAction(Application $app)
    {
        $wyszukiwarkaRepository = new WyszukiwarkaRepository($app['db']);

        return $app['twig']->render(
            'wyszukiwarka/index.html.twig'
        );
    }

    public function searchAction(Application $app, Request $request)
    {

        dump($request->get('autor'));
        $wyszukiwarkaRepository = new WyszukiwarkaRepository($app['db']);

        {
            $wyszukiwarka = [];
            $autor = $request->get('autor');

            $form = $app['form.factory']->createBuilder(WyszukiwarkaType::class, $wyszukiwarka)->getForm();
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $wyszukiwarka = $form->getData();
                dump($wyszukiwarka);
            }

            return $app['twig']->render(
                'wyszukiwarka/sresult.html.twig',
                [
                    'autor' => $autor,
                    'wyszukiwarka' => $wyszukiwarkaRepository->findAll($autor),
                ]
            );
        }
    }
}
