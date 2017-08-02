@extends('layouts.layouts')

@section('content')
	<tr>
		<th>Text</th> 
		<th>Photo</th> 
		<th class="text-center">Action</th> 
	</tr>
	@foreach($interview as $key)
	<tr>
		<td>{!! $key->text !!}</td>
		<td><img style="width: 100px;height: 100px;" src="/images/{{ $key->photo }}"></td> 
		<td><a href= {{ url( 'admin/interview/' . $key->id . '/edit' ) }} class="btn btn-success"> Edit </a></td>
		<td><a href= {{ url( 'admin/interview/' . $key->id . '/delete' ) }} class="btn btn-danger">Delete</a></td>
	</tr>
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

