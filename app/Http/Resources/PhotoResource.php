<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PhotoResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'name'=>$this->name,
            'album_id'=>$this->album_id,
            'photo_url'=>route('photo.url', ['photoName'=>$this->file_name])
        ];
    }
}
