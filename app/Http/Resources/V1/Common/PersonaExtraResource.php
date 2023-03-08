<?php

namespace App\Http\Resources\V1\Common;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonaExtraResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'SocialSecurityNumber'      => $this->social_security_number,
            'PatientLevelAccession'     => $this->patient_level_accession,
            'EID'                       => $this->external_ID,
        ];
    }
}
