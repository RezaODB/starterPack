@extends('layouts.app')

@section('content')

<ul>
	@foreach ($users as $item)
	<li>
		<a href="{{ route('users.edit', $item) }}">{{ $item->name }}</a>
		<form action="{{ route('users.destroy', $item) }}" method="POST">
		
			@csrf

			@method('DELETE')

			<button type="submit" onclick="return confirm('Are you sure?')">Delete user</button>
		
		</form>
	</li>	
	@endforeach
</ul>

<a href="{{ route('users.create') }}">New user</a>

@if (session('flash'))
    <div>{{ session('flash') }}</div>
@endif
	
@endsection