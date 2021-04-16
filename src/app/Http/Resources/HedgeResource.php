<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HedgeResource extends JsonResource
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
            'code' => $this['codCobertura'],
            'description' => $this['descCobertura'],
            'fee' => $this['sumaAsegurada'],
            'show' => $this['mostrar'],
            'web_text' => $this['textoWeb'],
        ];
    }
}
