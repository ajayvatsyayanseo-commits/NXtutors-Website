<?php

declare(strict_types=1);

namespace App\Integrations\Chitragupta;

use Illuminate\Support\ServiceProvider;

final class ChitraguptaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/config/chitragupta.php', 'chitragupta');
        $this->app->singleton(ChitraguptaGatewayClient::class);
        $this->app->singleton(OutboxEventMapper::class, static function ($app) {
            return new OutboxEventMapper(
                (string) $app['config']->get('chitragupta.agent_id', 'web-gateway'),
                (string) $app['config']->get('app.env', 'production'),
            );
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([RelayDemoOutboxCommand::class]);
        }
    }
}
