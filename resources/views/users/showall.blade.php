@extends('app')
@section('content')
<div class="col-md-9">
<table  class="table">
<th>User ID</th>
<th>User Name</th>
<th>Note ID</th>
<th>Note</th>

@foreach($notes as $note)
<tr>

<td>{{$note->user['id']}}</td>
<td>{{$note->user['name']}}</td>
<td>{{$note->id}}</td>
<td>{{$note->body}}</td>

</tr>

@endforeach

</table>
</div>





@stop