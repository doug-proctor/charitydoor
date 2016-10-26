<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TITLE</title>

    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/webflow.css') }}" rel="stylesheet">

    <script src="{{ url('js/modernizr-2.7.1.js') }}"></script>

</head>
<body id="app" class="xhas-person (( appState ))">

<!-- 	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif -->

	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/get-started">Get started</a></li>
		<li><a href="/enter">Enter</a></li>
		<li><a href="/unsure">Unsure</a></li>
	</ul>

   	@yield('content')
	
    <!-- JavaScripts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script> -->

	<!-- <script type="text/javascript" src="{{ url('js/skrollr.min.js') }}"></script> -->

    
    <script src="{{ url('js/webfont.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/webflow.js') }}"></script>
</body>
</html>
