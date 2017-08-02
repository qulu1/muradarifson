@extends('layouts.layouts')

@section('form')

<form action={{ url("/admin/interview/" . $interview->id) }} method="POST" enctype="multipart/form-data">
{!! csrf_field() !!}
{{ method_field('PATCH') }}	

	<div class="form-group">
		<label for="photo">Photo:</label>
		<textarea class="ckeditor" name="text">{{ $interview->text }}</textarea>
		{{-- <input type="file" class="form-control" name="photo" value="{{$interview->photo}}"> --}}
	</div>	
	<div class="form-group">
		<label for="photo">Photo:</label>
		<input type="file" class="form-control" name="photo" value={{ $interview->photo }}>
	</div>		  
	<button type="submit" class="btn btn-success">Submit</button>
</form> 

@endsection
<script src= {{ url("//cdn.ckeditor.com/4.5.7/standard/ckeditor.js")  }} ></script>
