@extends('layouts.app')

@section('content')

<h2>Login</h2>

<form action="{{ route('login') }}" method="POST">
	
	@csrf
	
	<div class="input">
		<label for="email">Email</label>
		<input type="email" name="email" id="email" value="{{ old('email') }}" required>
		@error('email') {{ $message }} @enderror
	</div>
	
	<div class="input">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" required>
	</div>
	
	<div class="input">
		<input type="checkbox" name="remember" id="remember">
		<label for="remember">Remember me</label>
	</div>
	
	<button type="submit" class="btn">Login</button>
	
</form>
	
@endsection