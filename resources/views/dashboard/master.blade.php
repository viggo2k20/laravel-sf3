<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- link:css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Post</title>
</head>

<body>
    {{-- .container --}}
    @include('dashboard.structure.navbar')
    <div class="container">
        <div class="jumbotronm">
            @include('dashboard.structure.status')
            @yield('content')
        </div>
    </div>
    {{-- script:src --}}
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>