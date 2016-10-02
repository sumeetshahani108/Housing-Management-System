<?php
//In the documentation it is App\UserSearch
namespace App\Search;
use App\Apartment;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request ;

class UserSearch{
    public static function apply(Request $filters,$var){
        echo $filters;
        $query = static::applyDecoratorsFromRequest($filters, (new Apartment())->newQuery());
        return static::getResults($query);
    }

    private static function applyDecoratorsFromRequest(Request $request, Builder $query){
        foreach ($request->all() as $filterName => $value) {
            $decorator = static::createFilterDecorator($filterName);
            if (static::isValidDecorator($decorator)) {
                $query = $decorator::apply($query, $value);
            }
        }
        return $query;
    }

    private static function createFilterDecorator($name){
        return __NAMESPACE__ . '\\filters\\' . studly_case($name);
    }
    private static function isValidDecorator($decorator){
        return class_exists($decorator);
    }
    private static function getResults(Builder $query){
        echo $query;
        return $query->get();
    }

}