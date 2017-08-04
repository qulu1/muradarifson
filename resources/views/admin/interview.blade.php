@extends('layouts.layouts')

@section('content')
	@foreach($interview as $key)
	<div class="row">
	<div class="col-md-8">
		{!! $key->text !!}
	</div>
	<div class="col-md-4">
		<div class="gallery_main">
			<img src="/images/{{ $key->photo }}">
			<div class="hover_img">
				<div class="hover_inner">
					<a href= {{ url( 'admin/interview/' . $key->id . '/edit' ) }} class="btn btn-success"> Edit </a>
					<a href= {{ url( 'admin/interview/' . $key->id . '/delete' ) }} class="btn btn-danger">Delete</a>
				</div>
			</div>
		</div>
	</div>
	</div>

	@endforeach
@endsection

@section('form')
	<hr>	
	<form action={{ url('/admin/interview') }} method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
	  <div class="form-group">
	    <label for="text">Text:</label>
	    {{-- <input type="text" class="form-control" name="text"> --}}
		<textarea class="ckeditor" name="text"></textarea>

	  </div>		
	  <div class="form-group">
	    <label for="photo">Photo:</label>
	    <input type="file" class="form-control" name="photo">
	  </div>		    
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>  
@endsection

<script src={{ url("//cdn.ckeditor.com/4.5.7/standard/ckeditor.js")  }}></script>

