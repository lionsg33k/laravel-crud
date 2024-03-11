@extends('layouts.index')

@section('content')
    <h1>You are now editing {{ $product->name }} </h1>



    <form action="{{ route('product.update', $product) }}" method="post">
        @csrf
        @method("PUT")

        <input autofocus value="{{ old('name', $product->name) }}" name="name" type="text"
            placeholder="insert product title" required>
        <input value="{{ old('price', $product->price) }}" name="price" type="number" placeholder="insert product price"
            required>
        <div>
            <label for="">Red</label>
            <input {{ $product->color == 'red' ? 'checked' : '' }} name="color" value="red" type="radio"
                id="">
            <label for="">green</label>
            <input {{ $product->color == 'green' ? 'checked' : '' }} type="radio" name="color" value="green"
                id="">
        </div>
        <button>Update</button>
    </form>
@endsection
