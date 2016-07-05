@foreach($notes as $n)

{{$n->body}} <h1>{{$n->page->title}}</h1>
<br />
@endforeach