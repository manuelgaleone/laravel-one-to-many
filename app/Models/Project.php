<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Project extends Model
{

    protected $fillable = ['title', 'image', 'thumb', 'content', 'slug', 'category_id'];

    public static function generateSlug($title)
    {
        $project_slug = Str::slug($title);
        return $project_slug;
    }

    /**
     * Get all of the posts for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    use HasFactory;
}
