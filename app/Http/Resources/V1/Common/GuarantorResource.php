<?php

namespace App\Http\Resources\V1\Common;

use Illuminate\Http\Request;
use App\Enums\RelationWPatient;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\Common\PersonaResource;

class GuarantorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Relation'      => (empty($this->relation_with_patient)) ? RelationWPatient::None->name : RelationWPatient::from($this->relation_with_patient)->name,
            'Demographics'  => new PersonaResource($this->persona),
        ];
    }
}
