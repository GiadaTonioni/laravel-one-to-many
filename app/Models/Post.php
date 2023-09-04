<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use App\Models\Type;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug', 'category_id'];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}
