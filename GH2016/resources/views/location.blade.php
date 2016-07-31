@extends('template.template1')
@section('title')
	Location specified incidence
@endsection
@section('customStyle')
	<link href='css/age.css' rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper">
	<h1> 
		Incidents from 2000 - 2014 sorted according to location.
	</h1>
	<hr>
	<h4> 
		There are {{$total / 15}} recorded incidents in Hamilton per year on average. 
	</h4>
	<hr>
	<br>
	<table>
		<tbody>
			<tr>
				<td>
					Year
				</td>
				<td>
					Location
				</td>
				<td>
					Number of Incidences 
				</td>
			</tr>
			@foreach($locations as $location) 
				<tr>
					<td>
						{{$location->year}}
					</td>
					<td>
						{{$location->territory_name}}
					</td>
					<td>
						{{$location->number}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

@section('customFunction')
	
@endsection