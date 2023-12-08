<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Test Zanichelli</title>

    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    
</head>
<body>
    <div id="app" class="container d-flex justify-content-center">
        <form-component csrf="{{csrf_token()}}"></form-component>
        @if(session('message'))
        <div class="alert alert-success"  role="alert">{{ session('message') }}</div>
        @endif
    </div>
</body>
</html>