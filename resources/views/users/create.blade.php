@extends('layouts.app')

@section('content')

<div class="flex">
	
	<div class="left">

		<h2>Register</h2>
		
	</div>

	<div class="right">
		<form action="{{ route('users.store') }}" method="POST">
			
			@include('users.form')
			
		</form>
	</div>

</div>


@endsection