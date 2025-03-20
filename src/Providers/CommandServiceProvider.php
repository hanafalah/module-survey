<?php

declare(strict_types=1);

namespace Hanafalah\ModuleSurvey\Providers;

use Illuminate\Support\ServiceProvider;
use Hanafalah\ModuleSurvey\Commands as Commands;

class CommandServiceProvider extends ServiceProvider
{
    private $commands = [
        Commands\InstallMakeCommand::class
    ];

    public function register()
    {
        $this->commands($this->commands);
    }

    public function provides()
    {
        return $this->commands;
    }
}
