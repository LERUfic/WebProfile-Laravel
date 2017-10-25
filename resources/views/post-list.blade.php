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
  <link rel="stylesheet" href="{{URL::asset('css/jquery.dataTables.min.css')}}">
@endsection

@section('content')
  <table id="savedposts" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Title</th>
        <th>User</th>
        <th>Status</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>No</th>
        <th>Title</th>
        <th>User</th>
        <th>Status</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
      </tfoot>
    <tbody>
      @foreach ($datapost as $dpost)
        <tr>
          <th>{{ $dpost->no }}</th>
          <th>{{ $dpost->title }}</th>
          <th>{{ $dpost->user }}</th>
          <th>{{ $dpost->status }}</th>
          <th>{{ $dpost->date }}</th>
          <th>
            <form action="#" method="post" accept-charset="utf-8">
              {{ csrf_field() }}
              <input type="hidden" value="{{ $dpost->id }}" name="idpost">
              <button type="submit" class="btn btn-success">Publish</button>
            </form>
            <form action="#" method="post" accept-charset="utf-8">
              {{ csrf_field() }}
              <input type="hidden" value="{{ $dpost->id }}" name="idpost">
              <button type="submit" class="btn btn-warning">Edit</button>
            </form>
            <form action="#" method="post" accept-charset="utf-8">
              {{ csrf_field() }}
              <input type="hidden" value="{{ $dpost->id }}" name="idpost">  
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </th>
        </tr>
      @endforeach
    </tbody>
  </table>
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

      $(document).ready(function() {
            $('#reservation').DataTable();
      });
	</script>
	<script src="{{URL::asset('js/summernote.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/bootstrap.minx.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
@endsection