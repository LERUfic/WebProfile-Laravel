@extends('sidebar2')

@section('title', 'Create Post')

@section('navbar')
  @include('navbar')
@endsection

@section('frontcss')
@endsection

@section('backcss')
@endsection

@section('content')
  <button onclick="showPostModal()" class="ui inverted red button">New Post +</button>
@endsection

@section('modal')
<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">Create New Post:</div>
  <div class="description">
    <form method="POST" action="#">
      {{ csrf_field() }}
      <br>
      <center><textarea id="formInput">Post Something Nice Please :)</textarea></center>
      <br>
      <br>
      <div class="pull-right ui buttons" style="margin-right: 10px; margin-bottom: 10px;">
        <button type="reset" class="ui button" onclick="closePostModal()">Cancel</button>
        <div class="or"></div>
        <button type="submit" class="ui positive button">Save</button>
      </div>
    </form>
    <br>
  </div>
</div>
@endsection

@section('frontjs') 
@endsection

@section('backjs')
  <script src="{{URL::asset('tinymce/tinymce.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
     $(document).ready(function() {
        tinymce.init({
          selector: '#formInput',
          theme: 'modern',
          width: 800,
          plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
          ],
          toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
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
@endsection