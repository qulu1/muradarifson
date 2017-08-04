@extends('layouts.layouts')

@section('content')
	<div class="row">
	@foreach($composer as $key)
	
<div class="col-md-3">
	<div class="gallery_main">
		<img src="/images/{{ $key->photo }}">
		<div class="hover_img">
			<div class="hover_inner">
				<a href= {{ url("/admin/composer/" . $key->id . "/edit") }} class="btn btn-success">Update</a>
				<a href= {{ url("/admin/composer/" . $key->id . "/delete") }} class="btn btn-danger">Delete</a>
				<a href= {!! $key->text !!} class="btn btn-danger" target="_blank">View Link</a>
			</div>
		</div>
	</div>
</div>
	@endforeach
	</div>
@endsection

@section('form')
	<hr>
	<form action={{ url('/admin/composer') }} method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="form-group">
			<label name='text'>Youtube Link:</label>
			<textarea  name="text"></textarea>

		</div>
		<div class="form-group">
			<label name='text'>Photo:</label>
			<input type="file" name="photo" value="">

		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>

<script src={{ url("//cdn.ckeditor.com/4.5.7/standard/ckeditor.js")  }}></script>


@endsection
