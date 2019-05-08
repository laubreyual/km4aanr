@extends('layouts.default')

@section('title', 'Analytics')

@section('content')
	<div class="container">
		<div class="row center">
			<div class="input-field col offset-s2 s8 offset-m2 m8 offset-l2 l8">
				<select class="browser-default">
					<option value="" disabled selected>Choose consortium</option>
					<optgroup label="Luzon">
						<option value="1">Mariano Marcos State University</option>
						<option value="2">Benguet State University</option>
						<option value="3">Isabela State University</option>
						<option value="4">Central Luzon State University</option>
						<option value="5">University of the Philippines Los Ba&ntilde;os</option>
						<option value="6">Cavite State University</option>
						<option value="7">Bicol University College of Agriculture and Forestry</option>
					</optgroup>
					<optgroup label="Visayas">
						<option value="8">Western Visayas State University</option>
						<option value="9">Bohol Island State University</option>
						<option value="10">Visayas State University</option>
					</optgroup>
					<optgroup label="Mindanao">
						<option value="11">Western Mindanao State University</option>
						<option value="12">Central Mindanao State University</option>
						<option value="13">University of Southern Mindanao</option>
						<option value="14">Mindanao State University - Maguindanao</option>
						<option value="15">Caraga State University</option>
					</optgroup>
				</select>
			</div>
		</div>
		<div class="row center">
			<h5>Analytics for <strong>Mariano Marcos State University</strong></h5>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12 center">
			<div class="card-panel grey lighten-2">
				<div class="row">
					<div class="col s3">
						<h2>244</h2>
						<p>Total Publications</p>
					</div>
					<div class="col s3">
						<h2 class="green-text text-lighten-1">124</h2>
						<p class="green-text text-lighten-1">Agriculture</p>
					</div>
					<div class="col s3">
						<h2 class="blue-text text-lighten-1">12</h2>
						<p class="blue-text text-lighten-1">Aquatic</p>
					</div>
					<div class="col s3">
						<h2 class="brown-text text-lighten-1">108</h2>
						<p class="brown-text text-lighten-1">Natural Resources</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col s12 m4 l4 center">
			<div class="card-panel grey lighten-2">
				<p class="green-text text-lighten-1">Publications per Category</p>
				<p class="green-text text-lighten-1">Agriculture</p>
				<canvas id="agriculture"></canvas>
			</div>
		</div>
		<div class="col s12 m4 l4 center">
			<div class="card-panel grey lighten-2">
				<p class="blue-text text-lighten-1">Publications per Category</p>
				<p class="blue-text text-lighten-1">Aquatic</p>
				<canvas id="aquatic"></canvas>
			</div>
		</div>
		<div class="col s12 m4 l4 center">
			<div class="card-panel grey lighten-2">
				<p class="brown-text text-lighten-1">Publications per Category</p>
				<p class="brown-text text-lighten-1">Natural Resources</p>
				<canvas id="naturalresources"></canvas>
			</div>
		</div>
		<div class="col s12 m6 l6 center">
			<div class="card-panel grey lighten-2">
				<canvas id="views"></canvas>
			</div>
		</div>
		<div class="col s12 m6 l6 center">
			<div class="card-panel grey lighten-2">
				<canvas id="downloads"></canvas>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
 			$('select').formSelect();
		});
		new Chart(document.getElementById("views"),{"type":"line","data":{"labels":["January","February","March","April","May","June","July","August","September","October","November","December"],"datasets":[{"label":"Number of Views","data":[65,59,80,181,156,55,40,123,23,12,23,134],"fill":false,"borderColor":"rgb(96, 125, 139)","lineTension":0.1}]},"options":{}});
		new Chart(document.getElementById("downloads"),{"type":"line","data":{"labels":["January","February","March","April","May","June","July","August","September","October","November","December"],"datasets":[{"label":"Number of Downloads","data":[21,9,50,59,150,12,2,0,6,6,10,69],"fill":false,"borderColor":"rgb(96, 125, 139)","lineTension":0.1}]},"options":{}});
		new Chart(document.getElementById("agriculture"),{"type":"pie","data":{"labels":["Crops","Livestock"],"datasets":[{"label":"My First Dataset","data":[64,60],"backgroundColor":["rgb(67, 160, 71)","rgb(165, 214, 167)"]}]}});
		new Chart(document.getElementById("aquatic"),{"type":"pie","data":{"labels":["Inland Fisheries","Marine Resources"],"datasets":[{"label":"My First Dataset","data":[4,8],"backgroundColor":["rgb(30, 136, 229)","rgb(100, 181, 246)"]}]}});
		new Chart(document.getElementById("naturalresources"),{"type":"pie","data":{"labels":["Natural Resources","Forestry","Environment"],"datasets":[{"label":"My First Dataset","data":[81,17,10],"backgroundColor":["rgb(109, 76, 65)","rgb(161, 136, 127)","rgb(62, 39, 35)"]}]}});
	</script>
@endsection