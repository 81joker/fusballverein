<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassType extends Model
{
    use HasFactory;

    public function scheduledClass(){
        return $this->hasMany(ScheduledClass::class);
    }

}
