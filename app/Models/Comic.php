<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected function artists(): Attribute

    {

        return Attribute::make(

            get: fn ($value) => json_decode($value, true),

            set: fn ($value) => json_encode($value),

        );
    }
    protected function writers(): Attribute

    {

        return Attribute::make(

            get: fn ($value) => json_decode($value, true),

            set: fn ($value) => json_encode($value),

        );
    }
}
