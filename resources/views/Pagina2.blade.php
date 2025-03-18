@extends('Master')
@section('conten')
<h1>Pagina 2</h1>
@if ($datosUsuario['name'] == "Jorshua")
<h2>hola jorshua</h2>
@endif

<ul>
    @foreach ([1,2,3,4,5] as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>

@endsection