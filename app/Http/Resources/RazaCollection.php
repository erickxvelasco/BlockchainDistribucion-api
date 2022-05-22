<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RazaCollection extends ResourceCollection
{
    public $collects = RazaResource::class;//es para definir la estructura de cada uno de sus child
    //por convencion si tiene el mismo nombre no es necesario
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
                'self'=>route('api.raza.index')
            ]
        ];
    }
}
