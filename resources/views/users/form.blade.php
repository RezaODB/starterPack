@csrf

<div class="input">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" value="{{ old('name') ?? $user->name ?? '' }}" required>
	<div class="error">
		@error('name') {{ $message }} @enderror
	</div>
</div class="input">

<div class="input">
	<label for="email">Email</label>
	<input type="email" name="email" id="email" value="{{ old('email') ?? $user->email ?? '' }}" required>
	<div class="error">
		@error('email') {{ $message }} @enderror
	</div>
</div class="input">

<div class="input">
	<label for="password">Password</label>
	<input type="password" name="password" id="password" required>
	<div class="error">
		@error('password') {{ $message }} @enderror
	</div>
</div class="input">

<div class="input">
	<label for="password_confirmation">Confirm password</label>
	<input type="password" name="password_confirmation" id="password_confirmation" required>
	<div class="error">
		@error('password') {{ $message }} @enderror
	</div>
</div class="input">