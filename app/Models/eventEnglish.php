<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class eventEnglish extends Model
{
    use HasFactory;

    protected $table = 'event_englishes';

    protected $fillable = [
        'title',
        'slug',
        'date',
        'time',
        'place',
        'discription',
        'image',
        'm_image',
    ];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
