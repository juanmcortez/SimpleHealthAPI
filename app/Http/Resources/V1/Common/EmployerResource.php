<?php

namespace App\Http\Resources\V1\Common;

use Illuminate\Http\Request;
use App\Http\Resources\V1\Common\PhoneResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\Common\AddressResource;
use App\Http\Resources\V1\Common\PersonaResource;

class EmployerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Company'           => $this->company_name,
            'CompanyPosition'   => $this->company_position,
            'Demographics'      => $this->when(!empty($this->persona->id), new PersonaResource($this->persona)),
            'CompanyAddress'    => $this->when(!empty($this->companyAddress->street_name), new AddressResource($this->companyAddress)),
            'CompanyPhone'      => $this->when(!empty($this->companyPhone->telephone_prefix), new PhoneResource($this->companyPhone)),
            'CompanyFax'        => $this->when(!empty($this->companyFax->telephone_prefix), new PhoneResource($this->companyFax)),
        ];
    }
}
