<?php

namespace App\Http\Resources\V1\Common;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Street'        => $this->street_name . ' ' . $this->street_name_extended,
            'City'          => $this->city,
            'StatePostCode' => $this->state . ' ' . $this->postal_code,
            'Country'       => $this->country_code,
        ];
    }
}
