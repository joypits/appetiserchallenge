<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.laravel = { csrfToken: '{{ csrf_token() }}'}</script>
        <title>Appetiser Coding Challenge</title>

        <!-- Global stylesheets -->
        <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('global_assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('global_assets/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('global_assets/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('global_assets/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('global_assets/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->
        <!-- Core JS files -->
        <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
        <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
        <!-- /core JS files -->
        <script src="{{ asset('global_assets/assets/js/app.js') }}"></script>
        <script src="{{ asset('global_assets/js/demo_pages/form_checkboxes_radios.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('global_assets/js/sweetalert2.js') }}"></script>
    </head>
    <body class="antialiased">
        @include('partials/header')
        <div class="page-content">
            <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md"></div>
                <div class="content-wrapper">
                    <div id="app" class="content">
                        <div class="container">
                                <Calendar></Calendar>
                            </div>
                    </div>
                </div>
        </div>
    </body>
</html>
