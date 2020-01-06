<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Shareable;

class House extends Model
{
    use Shareable;

    protected $fillable = [
                            'location_id', 'category_id', 'nama', 'images', 
                            'price', 'luas', 'electricity', 'bedrooms', 'bathrooms', 
                            'living_room', 'kitchen', 'garage', 'address', 'description'
                        ];

    protected $shareOptions = [
        'columns' => [
            'title' => 'nama'
        ],
        'url' => null
    ];

    public function getUrlAttribute()
    {
        return route('property.show', $this->id);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
