<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'like';

    protected $fillable = ['id', 'user_id', 'story_id', 'status'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function story()
    {
        return $this->belongsTo(Story::class, 'story_id', 'id');
    }
}
