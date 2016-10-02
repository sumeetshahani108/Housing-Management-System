<?php

namespace App\UserSearch\filters;
use Illuminate\Database\Eloquent\Builder;

class City implements filter{
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('city', $value);
    }
}