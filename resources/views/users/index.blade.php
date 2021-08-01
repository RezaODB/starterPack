@extends('layouts.app')

@section('content')

<h2>Users</h2>

<ul>
	@foreach ($users as $item)
	<li>
		<a href="{{ route('users.edit', $item) }}">{{ $item->name }}</a>
		<form action="{{ route('users.destroy', $item) }}" method="POST">
		
			@csrf

			@method('DELETE')

			<button type="submit" onclick="return confirm('Are you sure?')" class="delete">X</button>
		
		</form>
	</li>	
	@endforeach
</ul>

<a href="{{ route('users.create') }}" class="btn">New user</a>

@include('admin.flashes')
	
@endsection