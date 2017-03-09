@extends('game.base')

@section('page_content')
	<main style = "min-height: 350px;">

		<div class = "col-*-*">
		
		
		</div>
	
		<div  class = "container-fluid">
			<div class = "panel panel-default panel-custom">
			
				<div class = "panel-heading">
					<i class = "fa fa-exclamation-circle"> </i> Notification
					
				</div>
				
				<div class = "panel-body" style = "min-height: 150px; position:relative;">
					
					Your request has been regestered. Please wait for admin authorization in order to play the game. 
					
					<br/>
					@if(\Auth::user())
					<h1>{{\Auth::user()->name}}</h1>
					@endif

					<a href = "{{URL::to('/')}}" class = "btn-default right" style = "position:absolute; bottom:5px; right:10px;">  return to home <i class = "fa fa-chevron-circle-right"> </i></a>
				
				</div>
				

			</div>
	
		</div>
	
	</main>
@endsection