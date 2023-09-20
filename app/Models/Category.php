<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_id', 'user_id' ,'category_name', 'slug'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'category_name'
            ]
        ];
    }
}
