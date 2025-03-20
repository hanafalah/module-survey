<?php

namespace Hanafalah\ModuleSurvey;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleSurveyServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMainClass(ModuleSurvey::class)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers([
                '*',
                'Services'  => function () {
                    $this->binds([
                        Contracts\ModuleSurvey::class  => ModuleSurvey::class,
                    ]);
                },
            ]);
    }

    protected function dir(): string
    {
        return __DIR__ . '/';
    }

    protected function migrationPath(string $path = ''): string
    {
        return database_path($path);
    }
}
