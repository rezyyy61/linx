<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliticalProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name',
        'tagline',
        'description',
        'logo_path',
        'manifesto_path',
        'entity_type',
        'location',
        'founded_year',
        'publish_now',
    ];

    protected $casts = [
        'publish_now' => 'boolean',
    ];

    public function links(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PoliticalProfileLink::class);
    }

    public function ideologies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PoliticalProfileIdeology::class);
    }
}
