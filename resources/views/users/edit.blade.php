@extends('layouts.app')

@section('content')

<div class="flex">

	<div class="left">

		<h2>Update profil</h2>
	
	</div>
	
	<div class="right">

		<form action="{{ route('users.update', $user) }}" method="POST">
			
			@method('PATCH')
			
			@include('users.form')
			
		</form>
		
	</div>

</div>

@endsection