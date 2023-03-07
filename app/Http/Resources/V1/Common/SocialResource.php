<?php

namespace App\Http\Resources\V1\Common;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SocialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Email'         => $this->email_username . '@' . $this->email_domain,
            'Website'       => $this->website,
        ];
    }
}
