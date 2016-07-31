@extends('template.template1')
@section('title')
	Welcome to DoggiePedia!
@endsection
@section('customStyle')
	<link href="css/welcome.css" rel="stylesheet">
@endsection

@section('content')

<a href='incidence' id='navigationButton'>
	<button>
		Know More
	</button>
</a>
<div class='page-wrapper'>
	<div class="col-sm-4" colNum='1'>
		<img src="img/welcome/welcome1.jpg" alt="">
		<div class="content">
			<div class="background">
				<br>
				<h1>The love to dogs and number</h1>
				<p>point1</p>
				<p>point2</p>
				<p>point3</p>
				<br>
			</div>
		</div>
	</div>
	<div class="col-sm-4" id="textContainer2">
		incidence each year 
	</div>
	<div class="col-sm-4" id="textContainer3">
		promotional slogan
	</div>
</div>
@endsection

@section('customFunction')
	
@endsection
