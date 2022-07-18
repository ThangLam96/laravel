@extends('website.index')

@section('content')
    <h1>Product Module - Create Action</h1>
    <form action=" {{ route('product.store')}} " method="post">   
        @csrf  
            <div class="inputBox">
                <input type="text" name="name" required='required' />
                <span>Name</span>
            </div>
            <div class="inputBox">
                <input type="text" name="price" required='required' />
                <span>Price</span>
            </div>
            <div class="inputBox">
                <textarea name="intro" required='required'></textarea>
                <span>Intro</span>
            </div>
            <div class="inputBox">
                <textarea name="content" required='required'></textarea>
                <span>Content</span>
            </div>
            <div class="inputBox">
                <input type="file" name="image" required='required' />
                <span>Image</span>
            </div>
            <div class="inputBox">
                <textarea name="status" required='required'></textarea>
                <span>Status</span>
            </div>
            <div class="Box">
                <input type="submit" value='Create' required='required' />
            </div>
    </form>
@endsection