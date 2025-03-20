<?php

namespace Zahzah\ModuleSurvey\Resources\MasterSurvey;

use Zahzah\LaravelSupport\Resources\ApiResource;

class ViewMasterSurvey extends ApiResource
{
    public function toArray(\Illuminate\Http\Request $request) : array{
      return [
        'id'            => $this->id,
        'parent_id'     => $this->parent_id,
        'name'          => $this->name,
        'flag'          => $this->flag,
        'dynamic_forms' => $this->dynamic_forms ?? []
      ];
  }
}