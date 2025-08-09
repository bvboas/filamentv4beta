<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shifts extends Model
{

    public function categories()
    {

        return $this->belongsTo(ShiftCategory::class, 'category_id');
    }

}
