<?php

namespace Zahzah\ModuleSurvey\Commands;

use Zahzah\LaravelSupport\Concerns\ServiceProvider\HasMigrationConfiguration;

class EnvironmentCommand extends \Zahzah\LaravelSupport\Commands\BaseCommand{
    use HasMigrationConfiguration;

    protected function init(): self{
        return $this;
    }

    protected function dir(): string{
        return __DIR__.'/../';
    }
}
