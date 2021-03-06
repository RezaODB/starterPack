@extends('layouts.app')

@section('content')

<div class="flex">
	
	<div class="left">

		<h2>Login</h2>

	</div>

	<div class="right">
		
		<form action="{{ route('login') }}" method="POST">
			
			@csrf
			
			<div class="input">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" value="{{ old('email') }}" required>
				<div class="error">
					@error('email') {{ $message }} @enderror
				</div>
			</div>
			
			<div class="input">
				<label for="password">Password</label>
				<div class="error">
					<input type="password" name="password" id="password" required>
				</div>
			</div>
			
			<div class="input">
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember me</label>
			</div>
			
			<button type="submit" class="btn">Login</button>
			
		</form>
		
	</div>
	
</div>

@endsection