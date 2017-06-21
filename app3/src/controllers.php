<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Controller\BookmarkController;
use Controller\HelloController;
use Controller\TagController;
use Controller\HearItController;
use Controller\PlaylistyController;
use Controller\RankingiController;
use Controller\WyszukiwarkaController;
use Controller\ProfilController;
use Controller\RegisterController;
use Controller\AuthController;
use Controller\PlayController;
use Controller\VideoController;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->mount('/bookmark', new BookmarkController());
$app->mount('/hello', new HelloController());
$app->mount('/tag', new TagController());
$app->mount('/hearIt', new HearItController());
$app->mount('/playlisty', new PlaylistyController());
$app->mount('/rankingi', new RankingiController());
$app->mount('/wyszukiwarka', new WyszukiwarkaController());
$app->mount('/play', new PlayController());
$app->mount('/profil', new ProfilController());
$app->mount('/register', new RegisterController());
$app->mount('/auth', new AuthController());
$app->mount('/video', new VideoController());


$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage')
;

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
