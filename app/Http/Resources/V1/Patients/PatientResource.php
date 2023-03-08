<?php

namespace App\Http\Resources\V1\Patients;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\Common\PersonaResource;
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
            'PID'               => $this->pid,
            'Persona'           => new PersonaResource($this->persona),
            'PersonaExtras'     => new PersonaExtraResource($this->personaExtra),
            'PatientSince'      => $this->created_at->format(config('app.format.human.date')),
        ];
    }
}
