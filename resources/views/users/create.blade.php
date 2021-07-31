@extends('layouts.app')

@section('content')
	
<h1>New user</h1>

<form action="{{ route('users.store') }}" method="POST">
		
	@include('users.form')

	<button type="submit">Submit</button>

</form>


@endsection