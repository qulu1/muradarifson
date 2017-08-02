@extends('layouts.layouts')

@section('content')
	<tr>
		<th>Photo</th> 
		<th class="text-center">Action</th> 
	</tr>
	@foreach($gallery as $key)
	<tr>
		<td><img style="width: 100px;height: 100px;" src="/images/{{ $key->photo }}"></td> 
		<td><a href= {{ url( 'admin/gallery/' . $key->id . '/edit' ) }} class="btn btn-success"> Edit </a></td>
		<td><a href= {{ url( 'admin/gallery/' . $key->id . '/delete' ) }} class="btn btn-danger">Delete</a></td>
	</tr>
	@endforeach
@endsection

@section('form')
	<hr>	
	<form action={{ url('/admin/gallery') }} method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
	  <div class="form-group">
	    <label for="photo">Photo:</label>
	    <input type="file" class="form-control" name="photo">
	  </div>	  
	  <button type="submit" class="btn btn-success">Submit</button>
	</form>  
@endsection
