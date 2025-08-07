<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'description',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
