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
	<div class="col-sm-4 textContainer" colNum='col1'>
		<img src="img/welcome/welcome1.jpg" alt="">
		<div class="content">
			<div class="background">
				<br>
				<h1>Our love to dogs</h1>
				<h3>point1</h3>
				<h3>point2</h3>
				<h3>point3</h3>
				<br>
			</div>
		</div>
	</div>
	<div class="col-sm-4 textContainer" colNum='col2'>
		<img src="img/welcome/welcome3.jpg" alt="">
		<div class="content">
			<div class="background">
				<br>
				<h1>Attacking incidence to human</h1>
				<h3>point1</h3>
				<h3>point2</h3>
				<h3>point3</h3>
				<br>
			</div>
		</div>
	</div>
	<div class="col-sm-4 textContainer" colNum='col3'>
		<img src="img/welcome/welcome4.jpg" alt="">
		<div class="content">
			<div class="background">
				<br>
				<h1>Promotional slogan raising awareness</h1>
				<h3>point1</h3>
				<h3>point2</h3>
				<h3>point3</h3>
				<br>
			</div>
		</div>
	</div>
</div>
@endsection

@section('customFunction')
	<script defer>
		var flags = [];
		flags["col1"] = false;
		flags["col2"] = false;
		flags["col3"] = false;
	
		var containerArray = document.getElementsByClassName("textContainer");
		for (var i = 0; i < containerArray.length; i++) {
			containerArray[i].onmouseover = function() {
				var columnName = this.getAttribute("colNum");
				flags[columnName] = true;
				
				var backgroundImage = this.firstChild;
				while (backgroundImage.tagName != "IMG") {
					backgroundImage = backgroundImage.nextSibling;
				}
				backgroundImage.style.opacity = "0.9";
				backgroundImage.style.filter = "blur(1px)";
				
				var textContent = backgroundImage;
				while (textContent.className != "content") {
					textContent = textContent.nextSibling;
				}
				textContent.style.display = "table-cell";
				
				var textBackground = textContent.firstChild;
				while (textBackground.className != "background") {
					textBackground = textBackground.nextSibling;
				}
				textBackground.style.opacity = "0.75";
			}
			
			containerArray[i].onmouseout = function() {
				var backgroundImage = this.firstChild;
				while (backgroundImage.tagName != "IMG") {
					backgroundImage = backgroundImage.nextSibling;
				}
				backgroundImage.style.opacity = "0.5";
				backgroundImage.style.filter = "blur(5px)";
				
				var textContent = backgroundImage;
				while (textContent.className != "content") {
					textContent = textContent.nextSibling;
				}
				
				var textBackground = textContent.firstChild;
				while (textBackground.className != "background") {
					textBackground = textBackground.nextSibling;
				}
				textBackground.style.opacity = "0.3";
				
				var allRevealed = true;
				for (var key in flags) {
					if (!flags[key]) {
						allRevealed = false;
					}
				}
				
				if (allRevealed) {
					document.getElementById("navigationButton").style.display = "block";
				}
			}
		}
	</script>
@endsection
