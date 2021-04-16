<html lang="es">
<head>
    @include('includes.default.head')
    <link rel="stylesheet" href="{{ mix('css/build/app.css') }}">
</head>
<body>
@include('includes.default.header')

<div id="app">
    <app></app>
</div>

@include('includes.default.footer')
<script src="{{ mix('js/build/app.js') }}"></script>
</body>
</html>
