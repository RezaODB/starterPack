@extends('layouts.app')

@section('content')

<h1>Login</h1>
	
<form action="{{ route('login') }}" method="POST">
	
	@csrf

	<div>
		<label for="email">Email</label>
		<input type="email" name="email" id="email" value="{{ old('email') }}" required>
		@error('email') {{ $message }} @enderror
	</div>
	
	<div>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" required>
	</div>
	
	<div>
		<input type="checkbox" name="remember" id="remember">
		<label for="remember">Remember me</label>
	</div>

	<button type="submit">Login</button>

</form>

@endsection