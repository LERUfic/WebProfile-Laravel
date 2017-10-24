@extends('sidebar')

@section('title', 'Create Post')

@section('navbar')
	@include('navbar')
@endsection

@section('frontcss')
@endsection

@section('backcss')
	<link rel="stylesheet" href="{{URL::asset('css/summernote.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/button.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/button.min.css')}}">
@endsection

@section('content')
	<form method="POST" action="#">
    {{ csrf_field() }}
	<div class="col-xs-12 col-sm-12 col-md-12">
		<h1><strong>Create New Post:</strong></h1><br>
        <div class="form-group">
            <textarea class="form-control summernote" name="detail"></textarea>
        </div>
     </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
     	<div class="huge ui buttons">
  			<button class="ui button">Cancel</button>
  			<div class="or"></div>
  			<button type="submit" class="ui positive button">Save</button>
		</div>
	</div>
    
</form>
@endsection

@section('frontjs')
@endsection

@section('backjs')
	<script type="text/javascript">
    	$(document).ready(function() {
     		$('.summernote').summernote({
           		height: 300,
      		});
   		});
	</script>
	<script src="{{URL::asset('js/summernote.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/bootstrap.minx.js')}}" type="text/javascript"></script>
@endsection