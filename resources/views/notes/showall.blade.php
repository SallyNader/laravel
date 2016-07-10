@extends('app')
@section('content')

<script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="/css/jquery.dataTables.min.css" />
<script type="text/javascript">

$(document).ready(function() {

    $('#dataTable').DataTable();

} );
</script>

<table id="dataTable">
@foreach($notes as $n)
<tr>
<td>{{$n->body}}</td> <td>{{$n->page['title']}}</td>
</tr>
@endforeach
</table>
@stop