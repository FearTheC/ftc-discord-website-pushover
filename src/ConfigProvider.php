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
                'PushoverClient' => \FTC\Notifier\Pushover\ClientFactory::class,
            ],
        ];
    }

    public function getTemplates() : array
    {
        return [
        ];
    }
}
