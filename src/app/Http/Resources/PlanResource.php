<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $topHedge = 0;
        foreach ($this->resource['coberturas'] as $hedge) {
            if ($hedge['sumaAsegurada']) {
                $topHedge = $hedge['sumaAsegurada'];
                break;
            }
        }

        return [
            'code' => $this->resource['codRamo'],
            'description' => $this->resource['descRamo'],
            'fee' => $this->resource['cuota'],
            'top_hedge' => $topHedge,
            'top_hedge_display' => '$'.number_format($topHedge, 0, ',', '.'),
            'hedge' => HedgeResource::collection($this->resource['coberturas']),
        ];
    }
}
