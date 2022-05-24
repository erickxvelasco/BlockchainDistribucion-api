<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OriginCollection extends ResourceCollection
{
    public $collects = OriginResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection,
            'links'=>[
                'self'=>route('api.origin.index')
            ]
        ];
    }
}
