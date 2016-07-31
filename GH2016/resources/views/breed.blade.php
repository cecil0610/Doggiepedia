@extends('template.template1')
@section('title')
	Breed specified incidence
@endsection
@section('customStyle')
	<link href='css/age.css' rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper">
	<h1> 
		Incidents from 2001 - 2016 sorted according to breeds.
	</h1>
	<hr>
	<h2> 
		The money spent on recorded ACC claims is ${{$total / 17}} per year on average
	</h2>
	<h4>
		*This is a parital estimation of ten thousand data entries from the original dataset, limited to capacities in MySQL and page display
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
					Breed
				</td>
				<td>
					Location
				</td>
				<td>
					Value 
				</td>
			</tr>
			@foreach($breeds as $breed) 
				<tr>
					<td>
						{{$breed->year}}
					</td>
					<td>
						{{$breed->breed}}
					</td>
					<td>
						{{$breed->council_name}}
					</td>
					<td>
						{{$breed->value}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection