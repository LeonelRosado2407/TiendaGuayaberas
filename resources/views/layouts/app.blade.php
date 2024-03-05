{{-- aquí peguen una plantilla  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css') {{-- incluyan el css --}}
    @vite('resources/js/app.js') {{-- incluyan el js --}}
    @yield('extra-css')
</head>
<body>
{{-- incluyan el navbar --}}
@include('layouts.navbar')
<main>
    @yield('content')
</main>
    @yield('extra-js')
</body>
</html>
