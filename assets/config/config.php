<?php

use Zahzah\ModuleSurvey\{
    Models as ModuleSurvey
};

return [
    'contracts' => [
    ],
    'database' => [
        'models' => [
            'MasterSurvey'   => ModuleSurvey\MasterSurvey::class,
            'ModelHasSurvey' => ModuleSurvey\ModelHasSurvey::class
        ]
    ],
];