<?php

declare(strict_types=1);

namespace Zahzah\ModuleSurvey\Providers;

use Illuminate\Support\ServiceProvider;
use Zahzah\ModuleSurvey\Commands as Commands;

class CommandServiceProvider extends ServiceProvider
{
    private $commands = [
        Commands\InstallMakeCommand::class
    ];

    public function register(){
        $this->commands($this->commands);
    }

    public function provides()
    {
        return $this->commands;
    }
}
