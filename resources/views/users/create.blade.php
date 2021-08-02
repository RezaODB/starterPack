@extends('layouts.app')

@section('content')
	
<h2>Register</h2>

<form action="{{ route('users.store') }}" method="POST">
		
	@include('users.form')

</form>


@endsection