@extends('layouts.app')

@section('content')

@component('menu-submenu')
	@component('menu-icons-start')@endcomponent
@endcomponent

<div class="container">
	<h2>Delete Entry</h2>

	<form method="POST" action="/entries/delete/{{ $entry->id }}">

		<div class="form-group">
			<span name="title" class="">{{$entry->title }}</span>
		</div>

		<div class="form-group">
			<span name="description" class="">{{$entry->description }}</span>	
		</div>

		<div class="form-group">
			<span name="description_language1" class="">{{$entry->description_language1 }}</span>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Confirm Delete</button>
		</div>
	{{ csrf_field() }}
	</form>
</div>
@endsection