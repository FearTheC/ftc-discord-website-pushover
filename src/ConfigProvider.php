<?php

declare(strict_types=1);

namespace FTC\Notifier\Pushover;

class ConfigProvider
{

    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    public function getDependencies() : array
    {
        
        return [
            'delegators' => [
            ],
            'invokables' => [
            ],
            'factories'  => [
                'PushoverClient' => function(ContainerInterface $container) {
                    $config = $container->get('config')->offsetGet('pushover');
                    return new LeonardoTeixeira\Pushover\Client($config['user_id'], $config['app_token']);
                },
            ],
        ];
    }

    public function getTemplates() : array
    {
        return [
        ];
    }
}
