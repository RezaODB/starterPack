@extends('layouts.app')

@section('content')

<div class="card">
	
	<h2>Update user</h2>
	
	<form action="{{ route('users.update', $user) }}" method="POST">
		
		@method('PATCH')
		
		@include('users.form')
		
	</form>
	
</div>

@endsection