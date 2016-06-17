
@extends('layouts.app')

@section('content')



	<div class="container">

		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Body</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($posts as $key=>$post)
				<tr> 
					<td>{{$post->id}}</td>
					<td>{{$post->title}}</td>
					<td>{{$post->body}}</td>
					<td>

						<a href="{{URL::route('posts.delete',$post->id)}}"
									class="btn btn-danger"> Delete </a>

						<a href="{{URL::route('posts.view',$post->id)}}"
									class="btn btn-info"> View </a>

					</td>
				</tr>

				@endforeach


			</tbody>
		</table>
	</div>


		@endsection