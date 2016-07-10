@extends('app')
@section('content')
<div class="col-md-9">
<table>
@foreach($trashed as $path)
<tr>
<td>
@if($path->trashed())

<div style="background-color: aqua;padding:30px; margin: 30px; width: 800px;">

<strong>Already Deleted</strong>
@else
<div style="background-color: whitesmoke;padding:30px;margin: 30px">
@endif

{{$path->comment}}---TO---{{$path->path}}


@if(!$path->trashed())
<td> <a style="margin: 30px" href="{{url('upload/delete-path',['path_id'=>$path->id])}}"  class="btn btn-info">Delete</a></td>
@endif



  @if($path->trashed())
<td>
{!!Form::open(['url' => ['upload/restore', $path->id]])!!}

  {!!Form::submit("Restore",["class"=>"btn btn-default"])!!}
  {!!Form::close()!!}
</td>
<td>

  {!!Form::open(['url'=>['upload/delete-force',$path->id]])!!}
  {!!Form::submit('Delete Forever',['class'=>'btn btn-danger'])!!}
  {!!Form::close()!!}
</td>
  @endif

</td>


@endforeach
 </div>
</tr>
</table>
</div>

@stop