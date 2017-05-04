<?php

namespace OneMustCode\Laravel;

use Illuminate\Support\Facades\Route as LaravelRoute;
use Illuminate\Support\Str;

class Route
{
    /**
     * Determine if the current route name matches a pattern.
     *
     * @return bool
     */
    public static function is()
    {
        foreach (func_get_args() as $pattern) {
            if (Str::is($pattern, LaravelRoute::current()->getName())) {
                return true;
            }
        }

        return false;
    }
}