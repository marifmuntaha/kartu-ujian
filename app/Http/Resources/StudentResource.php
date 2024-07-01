<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'register' => $this->register,
            'name' => $this->name,
            'birthplace' => $this->birthplace,
            'birthdate' => $this->birthdate,
            'gender' => $this->gender == 'L' ? 'Laki-laki' : 'Perempuan',
            'address' => $this->address,
            'school' => $this->school,
            'father' => $this->father,
            'phone' => $this->phone,
            'ladder' => $this->ladder == '1' ? "MTS" : "MA",
            'program' => $this->program == '1' ? 'Tahfidz' : 'Kitab',
            'room' => $this->room,
        ];
    }
}
