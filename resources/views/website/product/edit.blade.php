@extends('website.index')

@section('content')
    <h1>Product Module - Edit Action</h1>
    <form action=" {{ route('product.update', ['id' => $product->id])}} " method="post">   
        @csrf  
            <div class="inputBox">
                <input type="text" name="name" value="{{ $product->name }}" required='required' />
                <span>Name</span>
            </div>
            <div class="inputBox">
                <input type="text" name="price" value="{{ $product->price }}" required='required' />
                <span>Price</span>
            </div>
            <div class="inputBox">
                <input name="intro" value="{{ $product->intro }}" required='required'></textarea>
                <span>Intro</span>
            </div>
            <div class="inputBox">
                <input name="content" value="{{ $product->content }}" required='required'></textarea>
                <span>Content</span>
            </div>
            <div class="inputBox">
                <input type="file" name="image" value="{{ $product->image }}" required='required' />
                <span>Image</span>
            </div>
            <div class="inputBox">
                <input name="status" value="{{ $product->status }}" required='required'></textarea>
                <span>Status</span>
            </div>
            <div class="Box">
                <input type="submit" value='Edit' required='required' />
            </div>
    </form>
@endsection