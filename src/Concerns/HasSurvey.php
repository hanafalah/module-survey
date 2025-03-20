<?php

namespace Hanafalah\ModuleSurvey\Concerns;

trait HasSurvey
{
    public function surveys()
    {
        $model_has_survey = $this->ModelHasSurveyModel();
        return $this->morphToManyModel('Survey', 'model', $model_has_survey->getTableName());
    }
}
