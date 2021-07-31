@extends('layouts.app')

@section('content')
	
<h1>Update user</h1>

<form action="{{ route('users.update', $user) }}" method="POST">
	
	@method('PATCH')

	@include('users.form')

	<button type="submit">Update</button>

</form>

@endsection