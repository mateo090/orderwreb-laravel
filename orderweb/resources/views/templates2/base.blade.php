<!DOCTYPE html>
<html leng="es">
<head>
    <meta cahrset="UTF-8">
    <meta name="viewport" contet="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="container">
        @include('templates2/banner')

        <div>
            <aside>
                @include('templates2/menu')
            </aside>
            <section>
                <!--Aqui se insertan las paginas que heredan de este template -->
                @yield('contet')
            </section>
            <br>
            @include('templates2/footer')
        </div>
    </div>
    <script src="{{ asset('js/test.js') }}"></script>
    @yield('scripts')
</body>
</html>