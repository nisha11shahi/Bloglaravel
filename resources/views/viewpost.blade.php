
@extends('layouts.app')

@section('content')
<div class="panel-body container">
	<div class="posttitle">
		<h2>{{$posts->title}}</h2>

	</div>
	<div class="postauthor">
		{{$posts->author}}

	</div>

	<div class="postbody">
		<br><br>
		{{$posts->body}}
	</div>
	<form class="form-horizontal" role="form" method="post" action="{{url('/addcomment')}}">
		<input type ="hidden" name="_token" value="{{ csrf_token() }}">
 <!--  <input type="hidden" name="user_name" value="{{Auth::user()->name}}"> -->
  <!-- <input type="hidden" name="author_id" value="{{Auth::user()->id}}"> -->
    <input type="hidden" name="post_id" value="{{$posts->id}}">
		<div class="form-group postcomment">
			<br> <br>
			<label class="control-label" for="inputSuccess1">Comment</label>
			<textarea class="form-control" rows="4" id="postBody" name="postcomment" value="{{old('postcomment') }}"></textarea>

		</div>

		<button type="submit" class="btn btn-success">Submit</button>

	</form>

</div>



@endsection