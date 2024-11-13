<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Turbotech</title>

        <!-- Fonts -->
       <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-side-navbar/1.0.0/bootstrap-side-navbar.min.css" integrity="sha512-Dzi0zz9zCe2olZNhq+wnzGjO5ILOv8f/yD6j8srW+XGnnv9dUN04eEoIdVHxQqiy8uBn21niIWQpiCzYJEH3yg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/css-social-buttons/1.4.0/css/zocial.min.css" integrity="sha512-D+88+j7wBsrfUyRLxvAi/ZYJ+2xffS/A9skvhx8Q8cxXv5rVrNX5BYm+GblI1POb23bjAygg2nXytDHtoGc9lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="{{asset('main/customer.css')}}"/>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/stickyNavbar.js/1.3.5/jquery.stickyNavbar.min.js" integrity="sha512-ZmuKyUb/AmPRhgVJ2Vlbr8smVcaUiB38gD0M6BXfibkvg3fk04KZMMzjQGqIaCWIM5msPAk0XIzQKb14x4qiWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
