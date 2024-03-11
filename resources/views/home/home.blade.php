@extends('layouts.index')


@section('content')
    <h1>Products</h1>

    <form action="{{ route('product.store') }}" method="post">
        @csrf

        <input name="name" type="text" placeholder="insert product title" required>
        <input name="price" type="number" placeholder="insert product price" required>
        <div>
            <label for="">Red</label>
            <input name="color" value="red" type="radio" id="">
            <label for="">green</label>
            <input type="radio" name="color" value="green" id="">
        </div>
        <button>Create</button>
    </form>


    <hr>
    <hr>
    <hr>

    @foreach ($products as $product)
        <h1>{{ $product->name }}</h1>
        <h1>{{ $product->price }}</h1>
        <a href="{{ route("product.show" , $product) }}">Update</a>
    @endforeach
@endsection
