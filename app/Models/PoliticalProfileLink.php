<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliticalProfileLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'political_profile_id',
        'website',
        'telegram',
        'instagram',
        'twitter',
        'facebook',
        'youtube',
    ];

    public function profile(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PoliticalProfile::class, 'political_profile_id');
    }
}
