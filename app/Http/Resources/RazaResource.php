<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RazaResource extends JsonResource
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
          'type'=>'raza',
          'id'=>(string) $this->resource->getRouteKey(),
          'atributes'=>[
              'raza'=>$this->resource->raza
          ],
          'links'=>[
              'self'=>route('api.raza.show',$this->resource)
          ]
        ];
    }
}
