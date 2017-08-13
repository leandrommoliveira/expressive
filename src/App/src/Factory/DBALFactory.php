<?php

namespace App\Factory;

use Interop\Container\ContainerInterface;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

class DBALFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');
        return DriverManager::getConnection($config['database'], new Configuration);
    }
}
