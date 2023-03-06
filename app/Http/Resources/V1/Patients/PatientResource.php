<?php

namespace App\Http\Resources\V1\Patients;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\Common\PersonaResource;

class PatientResource extends JsonResource
{
    /**
     * Indicates if the resource's collection keys should be preserved.
     *
     * @var bool
     */
    public $preserveKeys = true;


    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'PID'       => $this->pid,
            'persona'   => $this->persona,
            'created'   => $this->created_at->format(config('app.format.datetime')),
        ];
    }
}
