@extends('app')
@section('content')


@foreach($user->roles as $role)
<pre>
{{$role->position}}
{{$role->pivot->user_id}}
</pre>

@endforeach


@stop