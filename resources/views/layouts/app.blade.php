<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container-princ">
        <div class="mini-section">
          <div class="init">
            <div class="primo-init">DC POWER VISA</div>
            <div class="secondo-init">ADDITIONAL DC SITES</div>
          </div>
        </div>
       @include('partials.header')
       @include('partials.menu')

       @yield('content')

       @include('partials.footer')

    </div>

</body>
</html>