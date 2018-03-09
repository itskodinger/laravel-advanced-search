<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function scopeSearch($query, $queryString) {
        return $query->where('title', 'LIKE', '%'. $queryString .'%')
                     ->orWhere('body', 'LIKE', '%' . $queryString . '%');
    }

    
}
