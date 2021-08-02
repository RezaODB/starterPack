@extends('layouts.app')

@section('content')
	
<h2>Update user</h2>

<form action="{{ route('users.update', $user) }}" method="POST">
	
	@method('PATCH')

	@include('users.form')

</form>

@endsection