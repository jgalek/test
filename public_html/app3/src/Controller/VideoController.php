<?php
/**
 * Photo controller.
 */
namespace Controller;

use Form\VideoType;
use Repository\VideoRepository;
use Service\FileUploader;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

/**
 * Class PhotoController.
 *
 * @package Controller
 */
class VideoController implements ControllerProviderInterface
{
// ...
    /**
     * Add action.
     *
     * @param \Silex\Application                        $app     Silex application
     * @param \Symfony\Component\HttpFoundation\Request $request HTTP Request
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */

    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'addAction'])
            ->bind('video_index');
        $controller->post('/add', [$this, 'addAction'])
            ->bind('video_add');
        $controller->match('/{id}/delete', [$this, 'deleteAction'])
            ->method('GET|POST')
            ->assert('id', '[1-9]\d*')
            ->bind('video_delete');
        return $controller;
    }

    public function addAction(Application $app, Request $request)
    {
        $videoRepository = new VideoRepository($app['db']);

        $token = $app['security.token_storage']->getToken();
        if(null !== $token){
            $user = $token->getUser();
            $userLogin = $user->getUsername();
        }

        $video = [];
        $form = $app['form.factory']->createBuilder(VideoType::class, $video)->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $video  = $form->getData();
            //dump($video);
            $fileUploader = new FileUploader($app['config.videos_directory']);
            $fileName = $fileUploader->upload($video['video']);
            $video['video'] = $fileName;
            //dump($fileName);
            $videoRepository->save($video, $userLogin);

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type'    => 'success',
                    'message' => 'message.element_successfully_added',
                ]
            );

            return $app->redirect(
                $app['url_generator']->generate('video_index'),
                301
            );
        }

        return $app['twig']->render(
            'video/add.html.twig',
            [
                'video'  => $video,
                'form' => $form->createView(),
                'profil' => $videoRepository->findAll($userLogin),
                'userVideo' => $videoRepository->userVideo($userLogin)
            ]
        );
    }
// ...
    public function deleteAction(Application $app, $id, Request $request)
    {
        $videoRepository = new VideoRepository($app['db']);
        $video = $videoRepository->findOneById($id);

        if (!$video) {
            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'warning',
                    'message' => 'message.record_not_found',
                ]
            );

            return $app->redirect($app['url_generator']->generate('video_index'));
        }

        $form = $app['form.factory']->createBuilder(FormType::class, $video)->add('id', HiddenType::class)->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $videoRepository->delete($form->getData());

            $app['session']->getFlashBag()->add(
                'messages',
                [
                    'type' => 'success',
                    'message' => 'message.element_successfully_deleted',
                ]
            );

            return $app->redirect(
                $app['url_generator']->generate('video_index'),
                301
            );
        }

        return $app['twig']->render(
            'video/delete.html.twig',
            [
                'video' => $video,
                'form' => $form->createView(),
            ]
        );
    }

}