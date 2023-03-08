<?php

namespace App\Http\Resources\V1\Patients;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'FullName'                  => $this->full_name,
            'Birthdate'                 => $this->date_of_birth,
            'Phone'                     => $this->phone->full_phone,
            'SocialSecurityNumber'      => $this->patient->personaExtra->social_security_number,
            'PatientLevelAccession'     => $this->patient->personaExtra->patient_level_accession,
            'PID'                       => $this->patient->pid,
            'EID'                       => $this->patient->personaExtra->external_ID,
            'LastServiceDate'           => null,
            'PatientSince'              => $this->patient->created_at->format(config('app.format.human.date')),
        ];
    }
}
