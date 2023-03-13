<?php

namespace App\Http\Resources\V1\Patients;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\Common\PersonaResource;
use App\Http\Resources\V1\Common\EmployerResource;
use App\Http\Resources\V1\Common\GuarantorResource;
use App\Http\Resources\V1\Common\PersonaExtraResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'PID'                   => $this->pid,
            'Demographics'          => new PersonaResource($this->persona),
            'Extras'                => new PersonaExtraResource($this->personaExtra),
            'Guarantor'             => $this->when(!empty($this->guarantor->id), new GuarantorResource($this->guarantor)),
            'Employer'              => $this->when(!empty($this->employer->id), new EmployerResource($this->employer)),
            'PatientSince'          => $this->created_at->format(config('app.format.human.date')),
        ];
    }
}
