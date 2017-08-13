<?php

namespace App\Actions;

use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;

class ApiAction implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $id = $request->getAttribute('id');
        if (!empty($id)) {
            return new HtmlResponse('Serie com id ' . $id);
        }
        return new HtmlResponse('Minhas series');
    }
}
