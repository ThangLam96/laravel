@extends('website.index')
    @section('content')
    <h1>Product Module - Index Action</h1>
    <table border="1px">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Intro</td>
            <td>Content</td>
            <td>Image</td>
            <td>Status</td>
            <td>Created_at</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($product as $index)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$index->name}}</td>
            <td>{{$index->price}}</td>
            <td>{{$index->intro}}</td>
            <td>{{$index->content}}</td>
            <td>{{$index->image}}</td>
            <td>{{$index->status}}</td>
            <td>{{date('d/m/Y H:i:s', strtotime($index->created_at))}}</td>
            <td><a href='{{ route("product.edit", ['id' => $index->id]) }}'>Edit</a></td>
            <td><a href='{{ route("product.destroy", ['id' => $index->id]) }}'>Delete</a></td>
        </tr>
        @endforeach
    </table>   
    @endsection
