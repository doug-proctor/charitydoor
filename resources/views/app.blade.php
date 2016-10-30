<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/webflow.css') }}" rel="stylesheet">

    <script src="{{ url('js/modernizr-2.7.1.js') }}"></script>

</head>

<body id="app" class="@yield('body_classes')">

 	{{-- @if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif --}}

   	@yield('content')
    
    <script src="{{ url('js/webfont.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/webflow.js') }}"></script>
</body>
</html>
