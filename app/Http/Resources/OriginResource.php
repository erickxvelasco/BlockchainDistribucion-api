<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OriginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'type' => 'origin',
            'id' => (string) $this->resource->getRouteKey(),
            'atributes' => [
                'codigo_unico' => $this->resource->codigo_unico,
                'descripcion' => $this->resource->descripcion,
                'peso' => $this->resource->peso,
                'altura' => $this->resource->altura,
                'edad' => $this->resource->edad,
                'raza' => $this->resource->raza,
                'observaciones' => $this->resource->observaciones

            ],
            'links' => [
                'self' => route('api.origin.show', $this->resource)
            ]
        ];
    }
    //sobreescribimos el metodo toResponse para añadir headers
    public function toResponse($request)
    {
        return parent::toResponse($request)->withHeaders([
            'location' => route('api.origin.show', $this->resource)
        ]);
    }
}
