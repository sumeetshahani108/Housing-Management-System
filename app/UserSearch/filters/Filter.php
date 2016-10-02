<?php

namespace App\UserSearch\filters;

use Illuminate\Database\Eloquent\Builder;

interface filter{
    public static function apply(Builder $builder, $value);
}