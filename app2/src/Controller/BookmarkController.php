<?php
/**
 * Bookmark controller.
 *
 * @copyright (c) 2016 Tomasz Chojna
 * @link http://epi.chojna.info.pl
 */
namespace Controller;

use Model\Bookmarks\Arr\Bookmarks;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class HelloController.
 *
 * @package Controller
 */
class BookmarkController implements ControllerProviderInterface
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
            ->bind('bookmark_index');
        $controller->get('/{id}', [$this, 'viewAction'])
             ->bind('bookmark_');
        $controller->match('/add', [$this, 'addAction'])
            ->method('POST|GET')
            ->bind('bookmark_add');
        $controller->match('/{id}/edit', [$this, 'editAction'])
            ->method('GET|POST')
            ->assert('id', '[1-9]\d*')
            ->bind('bookmark_edit');
        return $controller;
    }

    /**
     * Index action.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return string Response
     */
    public function indexAction(Application $app)
    {
        $bookmarkModel = new Bookmarks();

        return $app['twig']->render(
            'bookmark/index.html.twig',
            ['bookmarks' => $bookmarkModel->findAll()]
        );
    }

    public function viewAction(Application $app, $id)
    {
        $bookmarksModel = new Bookmarks();
                return $app['twig']->render(
                    'bookmark/view.html.twig',
                    ['bookmark' => $bookmarksModel->findOneById($id)]
                );
    }



    public function addAction(Application $app, Request $request)
    {
        $bookmark = [];

        $form = $app['form.factory']->createBuilder(
            BookmarkType::class,
            $bookmark,
            ['tag_repository' => new TagRepository($app['db'])]
        )->getForm();
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $bookmarkRepository = new BookmarkRepository($app['db']);
            $bookmarkRepository->save($form->getData());

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.element_successfully_added',
                ]
            );

            return $app->redirect($app['url_generator']->generate('bookmark_index'), 301);
        }

        return $app['twig']->render(
            'bookamrk/add.html.twig',
            [
                'tag' => $tag,
                'form' => $form->createView(),
            ]
        );
    }
    public function editAction(Application $app, $id, Request $request)
    {
        $bookmarkRepository = new BookmarkRepository($app['db']);
        $bookmark = $bookmarkRepository->findOneById($id);

        if (!$bookmark) {
            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'warning',
                    'message' => 'message.record_not_found',
                ]
            );

            return $app->redirect($app['url_generator']->generate('bookmark_index'));
        }

        $form = $app['form.factory']->createBuilder(
            BookmarkType::class,
            $bookmark,
            ['tag_repository' => new TagRepository($app['db'])]
        )->getForm();
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $bookmarkRepository->save($form->getData());

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.element_successfully_edited',
                ]
            );

            return $app->redirect($app['url_generator']->generate('bookmark_index'), 301);
        }

        return $app['twig']->render(
            'bookmark/edit.html.twig',
            [
                'tag' => $tag,
                'form' => $form->createView(),
            ]
        );
    }


}