<?php

use Illuminate\Support\Facades\Route;
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

 function category_nav_active($cat_id)
{
        return  active_class((if_route('categories.show')&& if_route_param('category',$cat_id)));
}