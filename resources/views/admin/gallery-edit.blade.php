@extends('layouts.layouts')

@section('form')

<form action={{ url("/admin/gallery/" . $gallery->id) }} method="POST" enctype="multipart/form-data">
{!! csrf_field() !!}
{{ method_field('PATCH') }}	

	<div class="form-group">
		<label for="photo">Photo:</label>
		<input type="file" class="form-control" name="photo" value="{{$gallery->photo}}">
	</div>	  
	<button type="submit" class="btn btn-success">Submit</button>
</form> 

@endsection