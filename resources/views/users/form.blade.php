@csrf

<div>
	<label for="name">Name</label>
	<input type="text" name="name" id="name" value="{{ old('name') ?? $user->name ?? '' }}" required>
	@error('name') {{ $message }} @enderror
</div>

<div>
	<label for="email">Email</label>
	<input type="email" name="email" id="email" value="{{ old('email') ?? $user->email ?? '' }}" required>
	@error('email') {{ $message }} @enderror
</div>

<div>
	<label for="password">Password</label>
	<input type="password" name="password" id="password" required>
	@error('password') {{ $message }} @enderror
</div>

<div>
	<label for="password_confirmation">Confirm password</label>
	<input type="password" name="password_confirmation" id="password_confirmation" required>
	@error('password') {{ $message }} @enderror
</div>