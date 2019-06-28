<?php
$current_route = "";

$active = function ($routes = []) use ($current_route){
    $routes = is_string($routes) ? [$routes] : $routes;
    foreach ($routes as $route) {
        if($route == $current_route){
            return true;
        }
    }
    return false;
};

$fn_is_active = function($menus) {
    foreach ($menus['items'] as $menu) {
        if ($menu['active']) {
            return true;
        }
    }

    return false;
};

$menus = [
    ['icon' => 'fa fa-plus',
    'title' => 'Menu 1',
    'route' => 'home',
    'active' => $active(['home'])
    ],

    ['icon' => 'fa fa-plus',
    'route' => 'home',
    'title' => 'Menu 1',
    'active' => $active(['home'])],

    ['icon' => 'fa fa-plus',
    'route' => 'home',
    'title' => 'Menu 1',
    'active' => $active(['home']),
    ],
    

    ['icon' => 'fa fa-plus',
    'route' => 'home',
    'title' => 'Menu 1',
    'active' => $active(['home'])
    ],

    ['icon' => 'fa fa-plus',
    'route' => 'home',
    'title' => 'Menu 1',
    'active' => $active(['home'])
    ],
]
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <ul class="main_menu sidebar-menu">
        @foreach ($menus as $menu )
        <li class="has_child treeview {{ @$menu['active'] ? 'active show':'' }}">
            <a href="{{$menu['route']}}">
                <i class="{{ $menu['icon'] }}"></i><span>{{ $menu['title'] }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</aside>
<style>
.main_menu{
    list-style-type: none;
}
.main_menu a{
    display: block;
    padding: 15px 30px;
    text-decoration: none;
}
.active{
    background-color: green;
}
</style>