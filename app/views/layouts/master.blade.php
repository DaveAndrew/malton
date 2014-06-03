<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
        <title>@yield('meta-title', 'Malton App')</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/application.css" />
		
		<!--<script src="/js/jquery-2.0.3.min.js" type="text/javascript"></script>
		<script src="/js/application.js" type="text/javascript"></script> -->
	</head>
		
	<body>

        @include('layouts/partials/navbar')


        @if (Session::get('flash_message'))

            <div class="flash">
                {{ Session::get('flash_message') }}
            </div>
        @endif


		<div class="container">
			@yield('content')
		</div>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script src="/js/application.js" type="text/javascript"></script>
		
	</body>
</html>