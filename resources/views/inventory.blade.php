@extends('layouts.default')

@section('title', 'Inventory')

@section('content')
	<div class="container">
		<h5 class="center">Inventory as of <strong>{{ Carbon\Carbon::parse($now)->format('F j, Y') }}</strong></h5>
	</div>
	<div class="row center">
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>244</h3>
				<p>Mariano Marcos State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>435</h3>
				<p>Benguet State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>342</h3>
				<p>Isabela State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>1131</h3>
				<p>Central Luzon State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>4214</h3>
				<p>University of the Philippines Los Ba&ntilde;os</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>296</h3>
				<p>Cavite State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>760</h3>
				<p>Bicol University College of Agriculture and Forestry</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>564</h3>
				<p>Western Visayas State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>98</h3>
				<p>Bohol Island State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>432</h3>
				<p>Visayas State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>384</h3>
				<p>Western Mindanao State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>901</h3>
				<p>Central Mindanao State University</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>123</h3>
				<p>University of Southern Mindanao</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>54</h3>
				<p>Mindanao State University - Maguindanao</p>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card-panel grey lighten-2">
				<h3>145</h3>
				<p>Caraga State University</p>
			</div>
		</div>
	</div>
@endsection