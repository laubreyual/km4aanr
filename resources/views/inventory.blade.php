@extends('layouts.default')

@section('title', 'Inventory')

@section('content')
	<div class="container">
		<h5 class="center">Inventory as of <strong>{{ Carbon\Carbon::parse($now)->format('F j, Y') }}</strong></h5>
	</div>
@endsection