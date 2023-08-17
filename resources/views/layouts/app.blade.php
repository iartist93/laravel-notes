<!DOCTYPE html>
<html lang="en">

<head>
    <title>Notes App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<x-page-header :title="'Notes'"/>
<div class="container mx-auto">
    @yield('content')
</div>
</body>
@yield('scripts')
</html>
