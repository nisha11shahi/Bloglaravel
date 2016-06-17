@extends('layouts.app')
@section('content')
<div class="container">

	<table class="table table-hover">
		<thead>
			<tr>
				
				<th>Comment Title</th>
				<th>User ID</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($comments as $key=>$comment)
			<tr> 
				<td>{{$comment->comment}}</td>
				<td>{{$comment->user_id}}</td>
				<td>
					<a href="#"
									class="btn btn-danger"> Delete </a>

						<a href="#"
									class="btn btn-info"> View </a>
				</td>	
			</tr>

			@endforeach


		</tbody>
	</table>
</div>
@endsection