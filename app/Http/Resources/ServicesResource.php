<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str; // Import Str class for string operations

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'titre' => $this->title,
            'contenu' => $this->body,
            'description' => $this->description,
            'extrait' => Str::limit($this->description, 80), // Truncate description
            'slug' => $this->slug,
            'image' => asset('storage/' . $this->image), // Generate the full image URL
        ];
    }
}
