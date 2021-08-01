@extends('layouts.app')

@section('content')
	
<h2>Register</h2>

<form action="{{ route('users.store') }}" method="POST">
		
	@include('users.form')

	<button type="submit" class="btn">Submit</button>

</form>


@endsection