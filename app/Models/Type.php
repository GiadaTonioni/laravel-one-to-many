<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Model\Post;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];

    public function posts(): HasMany{
        return $this->hasMany(Post::class);
    }
}
