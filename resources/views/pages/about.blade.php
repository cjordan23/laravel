@extends('layouts.app') @section('content')
<div class="jumbotron text-center">
	<h1>
		<?php echo $title ?>
	</h1>
	<p>This is about page laravel tutorial</p>
</div>


<!-- Carrousel 
    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->



<!-- About Me
    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="row">
	<!-- First Container -->
	<div class="container bg-1 text-center">
		<h3 class="margin">Who Am I?</h3>
		<img src="/img/IMG_20170521_220652_588.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
		<h3>I'm YOU</h3>
	</div>

	<!-- Second Container -->
	<div class="container bg-2 text-center">
		<h3 class="margin">What Am I?</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		<a href="#" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-search"></span> Search
		</a>
	</div>

	<!-- Third Container (Grid) -->
	<div class="container bg-3 text-center">
		<h3 class="margin">Where To Find Me?</h3>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
					aliqua.</p>
				<img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
			</div>
			<div class="col-sm-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
					aliqua.</p>
				<img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
			</div>
			<div class="col-sm-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
					aliqua.</p>
				<img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
			</div>
		</div>
	</div>

</div>



@endsection