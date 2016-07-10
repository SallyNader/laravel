@extends('app')
@section('content')

@foreach($images as $path)
<pre>
@if($path->trashed())

<tr style="background-color: aqua;">

@else
<tr style="background-color: brown;">
@endif

{{$path->comment}}---TO---{{$path->path}}
 </tr>
  <a href="{{url('upload/delete-path',['path_id'=>$path->id])}}"  class="btn btn-info">Delete</a>
  <a href="{{url('upload/update',['path_id'=>$path->id,'comment'=>$path->comment])}}" class="btn btn-default" >Update</a>
	</pre>


@endforeach


@stop