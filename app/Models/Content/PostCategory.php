<?php

namespace App\Models\Content;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    protected $fillable = ['name', 'description', 'image', 'slug', 'status', 'tags'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getShowStatusAttribute()
    {
        if ($this->status === 1) {
            return 'checked';
        } else {
            return '';
        }
    }
}
