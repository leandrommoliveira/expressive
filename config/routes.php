<?php

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\RequestInterface as Request;

$app->route('/api', function(){
    return new HtmlResponse('Rota de Informação');
}, ['GET', 'OPTIONS'], 'contact');

$app->get('/api/series[/{id:\d+}]', App\Actions\GetAction::class);
$app->post('/api/series', App\Actions\PostAction::class);
