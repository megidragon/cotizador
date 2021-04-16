<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoubtResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'province' => $this->resource['provincia'],
            'province_id' => $this->resource['idProvincia'],
            'party' => $this->resource['partido'],
            'location' => $this->resource['localidad'],
            'neighborhood' => $this->resource['barrio'],
            'street' => $this->resource['calle'],
            'from' => $this->resource['desde'],
            'to' => $this->resource['hasta'],
        ];
    }
}
