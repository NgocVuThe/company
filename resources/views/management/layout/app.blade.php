<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token () }}">
    <title>@yield('page_title')</title>
    <link rel="icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/management.css') }}" type="text/css">
</head>
<body @yield('body-attribute') class="page-body @yield('body_class')" >
    <div class="wrapper_page">
        <div class="wrapper">
            <div class="left_column col-md-2">
                @include('management.partials.menu_left')
            </div>
            <div class="right_column col-md-10">
                    @include('management.partials.menu_top')
                <main class="main_page">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>

<style>
.left_column{
    border: 1px solid black;
}
.right_column{
    border: 1px solid red;
}

</style>