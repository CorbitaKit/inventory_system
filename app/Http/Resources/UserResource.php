<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $name = explode(' ', $this->name);

        return[

            'id' => $this->id,
            'firstname' => $name[0],
            'lastname' => $name[1],
            'email' => $this->email,
            'role_id' => $this->role->id

        ];
    }
}
