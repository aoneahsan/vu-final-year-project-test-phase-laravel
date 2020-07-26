<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'height_in_centimeter' => $this->height_in_centimeter,
            'weight_in_pounds' => $this->weight_in_pounds,
            'address' => $this->address,
            'contact_no' => $this->contact_no,
            'email' => $this->email
        ];
    }
}
