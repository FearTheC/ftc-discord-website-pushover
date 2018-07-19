<?php

declare(strict_types=1);

namespace FTC\Notifier\Pushover;

use Psr\Container\ContainerInterface;
use LeonardoTeixeira\Pushover\Client;

class ClientFactory
{
    
    public function __invoke(ContainerInterface $container) {
        $config = $container->get('config')->offsetGet('pushover');
        
        return new Client($config['user_id'], $config['app_token']);
    }
    
}
