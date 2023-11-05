{{--Привет, меня видно потому что в файле resources/views/app.blade.php нихуя нет)--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title inertia>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

	@if (Auth::user())
		<!-- User -->
		<meta name="user-id" content="{{ Auth::user()->id  }}">
		<meta name="user-username" content="{{ Auth::user()->username  }}">
		<script>window._Auth = @json(Auth::user()->toArray());</script>
	@endif

	<!-- Scripts -->
	@routes

	@vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])

	@inertiaHead

</head>
<body class="bg-body-tertiary no-js">


@inertia


</body>
</html>
