@extends('Master')
@section('conten')
<h1>Pagina 1</h1>


<ul>
    @foreach ([1,2,3,4,5] as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>

@endsection