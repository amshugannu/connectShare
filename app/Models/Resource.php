<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file_path',
        'user_id',
    ];

    // Define relationship to the user who shared the resource
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
