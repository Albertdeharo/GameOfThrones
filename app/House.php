<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
        /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
