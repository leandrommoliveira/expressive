<?php

namespace App\Actions;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

class GetAction extends BaseAction implements MiddlewareInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {


        $id = $request->getAttribute('id');
        if (!empty($id)) {
            return new HtmlResponse('Serie com id ' . $id);
        }
        $series = $this->dbal->createQueryBuilder()->select('*')->from('series')->execute()->fetchAll();

        return new JsonResponse($series);
    }
}
