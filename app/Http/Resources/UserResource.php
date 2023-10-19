<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>(string)$this->id,
            'type'=>'user',
            
            'attributes'=>[
                'name' => $this->name,
                'email' => $this->email,
                'organization' => $this->organization,
                'job_title' => $this->job_title,
                'phone'=>$this->phone,
                'code'=>$this->code,
                'created_at'=>$this->created_at,
                'updated_at'=>$this->updated_at
            ],
        ];
    }
}
