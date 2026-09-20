<?php

return [
    App\Providers\AppServiceProvider::class,
    App\NxtAi\Providers\NxtAiServiceProvider::class,
    App\Nxt\Dashboard\Providers\NxtDashboardServiceProvider::class,
    NxTutors\DemoCommandCenterAdapter\DemoCommandCenterAdapterServiceProvider::class,
    App\Integrations\Chitragupta\ChitraguptaServiceProvider::class,
];
