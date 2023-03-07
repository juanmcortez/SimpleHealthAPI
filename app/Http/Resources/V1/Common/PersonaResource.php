<?php

namespace App\Http\Resources\V1\Common;

use Illuminate\Http\Request;
use App\Http\Resources\V1\Common\PhoneResource;
use App\Http\Resources\V1\Common\SocialResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\Common\AddressResource;

class PersonaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'FullName'      => $this->full_name,
            'Age'           => $this->age,
            'BirthDate'     => $this->date_of_birth,
            'Gender'        => $this->gender->name, //This is an ENUM result
            'Address'       => new AddressResource($this->address),
            'Phone'         => new PhoneResource($this->phone),
            'CellPhone'     => new PhoneResource($this->cellphone),
            'Socials'       => new SocialResource($this->socials),
        ];
    }
}
