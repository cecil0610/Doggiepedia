@extends('template.template1')
@section('title')
	Records of Incidence
@endsection

@section('content')
	@foreach($categories as $category)
		<div class="category" navigation="{{$category->name}}">
			<h2>{{$category->name}}</h2>
			<h4>{{$category->description}}</h4>
			<hr>
		</div>
	@endforeach
@endsection

@section('customFunction')
	<script defer>
		var categoryArray = document.getElementsByClassName("category");
		for (var i = 0; i < categoryArray.length; i++) {
			categoryArray[i].onmouseover = function(e) {
				this.style.backgroundColor = "black";
				this.style.color = "white";
			}
			categoryArray[i].onmouseout = function(e) {
				this.style.backgroundColor = "white";
				this.style.color = "black";
			}
			categoryArray[i].onclick = function() {
				window.location.href = this.getAttribute("navigation");
			}
		}
	</script>
@endsection