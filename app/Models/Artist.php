<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = ['name','category'];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
    public function category()
{
    return $this->belongsTo(category::class);
}
}
