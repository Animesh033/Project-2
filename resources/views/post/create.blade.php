@extends('layouts.app')


@section('content')

<div class="container">
	<!-- /resources/views/post/create.blade.php -->

	<h1>Create Post</h1>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<!-- Create Post Form -->
	<div class="row">
		<div class="col-md-6">
			<form action="{{ route('post') }}" method="post">
				@csrf
			  <div class="form-group">
			    <label for="exampleInputTitle">Title</label>
			    <input type="text" class="form-control" name="title" id="exampleInputTitle" aria-describedby="titleHelp" placeholder="Enter Title">
			  </div>
			  <div class="form-group">
			      <label for="exampleFormControlTextarea1">Body textarea</label>
			      <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
			    </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>		
	</div>
</div>
@endsection