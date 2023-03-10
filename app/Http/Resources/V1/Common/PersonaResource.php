<?php

namespace App\Http\Resources\V1\Common;

use App\Enums\PersonaGender;
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
            'Gender'        => $this->when(!empty($this->gender->value), PersonaGender::from($this->gender->value)->name),
            'Address'       => $this->when(!empty($this->address->street_name), new AddressResource($this->address)),
            'Phone'         => $this->when(!empty($this->phone->telephone_prefix), new PhoneResource($this->phone)),
            'CellPhone'     => $this->when(!empty($this->cellphone->telephone_prefix), new PhoneResource($this->cellphone)),
            'Socials'       => $this->when(!empty($this->socials->email_username), new SocialResource($this->socials)),
        ];
    }
}
