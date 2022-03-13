@extends('layuot/layuot')

@section('content')
    <div>
    <h2>Search in forum</h2>
    <form><input name='name'></form>
    </div>

    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
