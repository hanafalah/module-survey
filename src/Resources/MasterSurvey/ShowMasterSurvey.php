<?php

namespace Hanafalah\ModuleSurvey\Resources\MasterSurvey;

class ShowMasterSurvey extends ViewMasterSurvey
{

  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [];
    $arr = $this->mergeArray(parent::toArray($request), $arr);

    return $arr;
  }
}
