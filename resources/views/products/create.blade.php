@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <input class="form-control mb-2" name="name" placeholder="Product name">
        <input class="form-control mb-2" name="price" placeholder="Price">

        <select class="form-control mb-2" name="category_id">
            @foreach($categories as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
        </select>

        <button class="btn btn-success">Save</button>
    </form>
@endsection
