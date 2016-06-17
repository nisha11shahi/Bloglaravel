@extends('layouts.app')

@section('content')
<form class="form-horizontal" role="form" method="post" action="{{url('/content')}}">
  <input type ="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="title" name="title" value="">
  </div>
</div>


<div class="form-group">
    <label for="message" class="col-sm-2 control-label"></label>
    <div class="col-sm-6">
      <textarea class="form-control" name="body" value="{{old('message')}}" rows="8" ></textarea>
  </div>
</div>

</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
  </div>
</div>

</form>
@endsection
