<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boogle News</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <header>
        @include('headerBar')
    </header>
    <div class='header-placeholder'></div>

    <main>
        <div class="left-sidebar">
            @include('leftSidebarOptions')
        </div>
        <div class='left-sidebar-placeholder'></div>

        <div class='compressible-space'></div>

        @yield('landingPageContent')
    </main>

</body>
</html>