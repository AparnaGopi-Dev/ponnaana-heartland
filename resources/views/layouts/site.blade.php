<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', config('property.name') . ' | Premium Commercial Space')
    </title>

    <meta
        name="description"
        content="Premium commercial space at {{ config('property.name') }}. Suitable for showrooms, retail, lifestyle, healthcare, food and beverage businesses."
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.site-navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.site-footer')

</body>
</html>