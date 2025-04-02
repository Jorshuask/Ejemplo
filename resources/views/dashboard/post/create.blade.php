@extends('dashboard/Master')

@section('content')
<h1>Pagina create</h1>
<form action="{{route('post.store')}}" method="post">
    @csrf
    <label for="">Title</label>
    <input type="text" name="title"><br><br>

    <label for="">Slug</label>
    <input type="text" name="slug"><br><br>

    <label for="">Content</label>
    <input type="text" name="content"><br><br>

    <label for="">Category_id</label>
    <select name="category_id">
        @foreach ($categories as $title => $id)
            <option value="{{$id}}">{{$title}} </option>
        @endforeach

    </select><br><br>

    <label for="">Description</label>
    <textarea name="description"></textarea><br><br>

    
    <label for="">Posted</label>
    <select name="posted">
        <option value="yes">Yes</option>
        <option value="not">Not</option>
    </select><br><br>

    <br>
    <button type="submit">Send</button>
</form>
@endsection