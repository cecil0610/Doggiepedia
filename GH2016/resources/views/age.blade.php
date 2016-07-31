@extends('template.template1')
@section('title')
	Age specified incidence
@endsection
@section('customStyle')
	<link href='css/age.css' rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper">
	<h1> 
		Incidents from 2000 - 2014 sorted according to age groups.
	</h1>
	<hr>
	<h4> 
		There are {{$total / 15}} recorded incidents per year on average. 
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
					Age Group
				</td>
				<td>
					Number of Incidences 
				</td>
			</tr>
			@foreach($ages as $age) 
				<tr>
					<td>
						{{$age->year}}
					</td>
					<td>
						{{$age->age_group}}
					</td>
					<td>
						{{$age->number}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

@section('customFunction')
	
@endsection