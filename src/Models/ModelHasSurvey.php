<?php

namespace Hanafalah\ModuleSurvey\Models;

use Hanafalah\LaravelSupport\Models\PivotBaseModel;

class ModelHasSurvey extends PivotBaseModel
{
    protected $list = [
        'model_id',
        'model_type',
        'survey_id'
    ];

    public function survey()
    {
        return $this->belongsToModel('Survey');
    }

    public function model()
    {
        return $this->morphTo();
    }
}
