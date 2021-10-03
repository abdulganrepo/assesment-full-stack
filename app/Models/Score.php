<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    protected $fillable = [
        'club_id',
        'menang',
        'seri',
        'kalah',
        'gm',
        'gk',
    ];

    const update_at = null;
}
