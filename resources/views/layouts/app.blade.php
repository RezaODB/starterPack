<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

	<header>
		{{ config('app.name') }}
		
		@auth
		<nav>
			<span>{{ auth()->user()->name }}</span>
			
			<form action="{{ route('logout') }}" method="post">
				
				@csrf
				
				<button type="submit">Logout</button>

			</form>

		</nav>
		@endauth

	</header>

	@yield('content')

</body>
</html>