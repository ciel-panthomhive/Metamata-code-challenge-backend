<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $table = 'story';

    protected $fillable = ['id', 'user_id', 'stories'];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
