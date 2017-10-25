@extends('sidebar2')

@section('title', 'Create Post')

@section('navbar')
  @include('navbar')
@endsection

@section('frontcss')
<link rel="stylesheet" href="{{URL::asset('css/modal.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/modal.min.css')}}">
@endsection

@section('backcss')
	<link rel="stylesheet" href="{{URL::asset('css/summernote.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/button.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/button.min.css')}}">
  
@endsection

@section('content')
  <button onclick="showPostModal()" class="huge ui inverted red button">New Post +</button>
@endsection

@section('modal')
<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">Create New Post:</div>
    <div class="description">
      <form method="POST" action="#">
        {{ csrf_field() }}
          <div class="form-group">
            <textarea class="form-control summernote" name="detail"></textarea>
          </div>
          <div class="ui buttons">
            <button type="reset" class="ui button" onclick="closePostModal()">Cancel</button>
            <div class="or"></div>
            <button type="submit" class="ui positive button">Save</button>
          </div>
      </form>
    </div>
</div>
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


      function closePostModal(){
        $('.ui.modal').modal('hide');
      }

      function showPostModal(){
        $('.ui.modal').modal({
          transition: 'browse',
        }).modal('show');
      }

	</script>
	<script src="{{URL::asset('js/summernote.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/bootstrap.minx.js')}}" type="text/javascript"></script>
@endsection