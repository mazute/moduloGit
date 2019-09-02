<?php

namespace App\Models\Acount;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
