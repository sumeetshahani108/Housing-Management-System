<?php

namespace App\UserSearch\filters;
use Illuminate\Database\Eloquent\Builder;

class Type implements filter{
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('type_of_apartment', $value);
    }
}