<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RoleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $roles = array();

        foreach($this->resource as $role){
            $roles[] = array(

                'value' => $role->id,
                'label' => $role->name
            );
        }

        return $roles;
      
    }
}
