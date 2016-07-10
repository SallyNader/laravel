@foreach($poster as $role)

{{$role->pivot->poster_id}}
<br />
@endforeach