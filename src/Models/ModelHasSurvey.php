<?php

namespace Zahzah\ModuleSurvey\Models;

use Zahzah\LaravelSupport\Models\PivotBaseModel;

class ModelHasSurvey extends PivotBaseModel{
    protected $list = [
        'model_id','model_type','survey_id'
    ];

    public function survey(){
        return $this->belongsToModel('Survey');
    }

    public function model(){
        return $this->morphTo();
    }
}