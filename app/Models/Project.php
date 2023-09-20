<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];

    protected $table = 'projects';
    protected $primaryKey = 'project_id';
    protected $fillable = ['project_id', 'user_id', 'title', 'category_id', 'slug', 'excerpt', 'body', 'image', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
