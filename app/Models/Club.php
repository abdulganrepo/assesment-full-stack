<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Club extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'club_name',
        'logo',
    ];

    public $timestamps = false;
}
