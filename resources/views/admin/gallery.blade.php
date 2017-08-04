@extends('layouts.layouts')

@section('content')
	<div class="row">
	@foreach($gallery as $key)
	
		<div class="col-md-3">
			<div class="gallery_main">
				<img src="/images/{{ $key->photo }}">
				<div class="hover_img">
					<div class="hover_inner">
						<a href= {{ url( 'admin/gallery/' . $key->id . '/edit' ) }} class="btn btn-success"> Edit </a>
						<a href= {{ url( 'admin/gallery/' . $key->id . '/delete' ) }} class="btn btn-danger">Delete</a>
					</div>
				</div>
			</div>
		</div>
	@endforeach
	</div>
@endsection

@section('form')
	<hr>	
	<form action={{ url('/admin/gallery') }} method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
	  <div class="form-group">
	    <label for="photo">Photo:</label>
	    <input type="file" class="form-control" name="photo[]" multiple="multiple">
	  </div>	  
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>  
{{-- 
<form action="{{ url('/author-register') }}" class="{{ $errors->has('name') ? ' has-error' : '' }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
<input name="vitae[]" type="file" id="vitae" multiple="multiple" >	 --}}
@endsection
