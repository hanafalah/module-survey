<?php

use Hanafalah\ModuleSurvey\{
    Models as ModuleSurvey
};

return [
    'app' => [
        'contracts' => [
            //ADD YOUR CONTRACTS HERE
        ],
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts'
    ],
    'database' => [
        'models' => [
            'MasterSurvey'   => ModuleSurvey\MasterSurvey::class,
            'ModelHasSurvey' => ModuleSurvey\ModelHasSurvey::class
        ]
    ],
];
