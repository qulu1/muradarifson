@extends('layouts.layouts')

@section('form')

<form action= {{ url("admin/singer/" . $singer->id) }} method="POST" enctype="multipart/form-data">
{!! csrf_field() !!}
{{ method_field('PATCH') }}

	<div class="form-group">
		<label name='text'>Title:</label>
		<textarea name="text">{{$singer->text}}</textarea>

	</div>
	<div class="form-group">
		<label name='text'>Photo:</label>
		<input type="file" name="photo" value="">
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
</form>

<script src={{ url("//cdn.ckeditor.com/4.5.7/standard/ckeditor.js")  }}></script>


@endsection
