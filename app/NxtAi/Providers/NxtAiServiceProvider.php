<?php

declare(strict_types=1);

namespace App\NxtAi\Providers;

use App\NxtAi\Agent\NxtAiAgent;
use App\NxtAi\Console\Commands\NxtAiCleanupCommand;
use App\NxtAi\Console\Commands\NxtAiDiagnoseCommand;
use App\NxtAi\Contracts\OpenAiChat;
use App\NxtAi\OpenAI\ResponsesClient;
use App\NxtAi\Support\ToolRegistry;
use App\NxtAi\Tools\CompareTutorsTool;
use App\NxtAi\Tools\ConfirmDemoBookingTool;
use App\NxtAi\Tools\GetDemoClassInfoTool;
use App\NxtAi\Tools\GetPricingInfoTool;
use App\NxtAi\Tools\GetTutorDetailsTool;
use App\NxtAi\Tools\PrepareDemoBookingTool;
use App\NxtAi\Tools\SearchSiteContentTool;
use App\NxtAi\Tools\SearchTutorsTool;
use Illuminate\Support\ServiceProvider;

class NxtAiServiceProvider extends ServiceProvider
{
    /** Tools registered with the agent — the complete allowlist. */
    private const TOOLS = [
        SearchTutorsTool::class,
        GetTutorDetailsTool::class,
        CompareTutorsTool::class,
        SearchSiteContentTool::class,
        GetPricingInfoTool::class,
        GetDemoClassInfoTool::class,
        PrepareDemoBookingTool::class,
        ConfirmDemoBookingTool::class,
    ];

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../../config/nxt-ai.php', 'nxt-ai');

        // Real OpenAI client by default; tests bind a fake to this contract.
        $this->app->bind(OpenAiChat::class, ResponsesClient::class);

        $this->app->singleton(ToolRegistry::class, function ($app): ToolRegistry {
            $registry = new ToolRegistry();
            foreach (self::TOOLS as $tool) {
                $registry->register($app->make($tool));
            }

            return $registry;
        });

        $this->app->bind(NxtAiAgent::class, function ($app): NxtAiAgent {
            return new NxtAiAgent($app->make(OpenAiChat::class), $app->make(ToolRegistry::class));
        });
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                NxtAiDiagnoseCommand::class,
                NxtAiCleanupCommand::class,
            ]);
        }
    }
}
