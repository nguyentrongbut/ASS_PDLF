@extends('layouts.app')

@section('content')
    <form method="GET">
        <select name="category_id" onchange="this.form.submit()" class="form-control mb-3">
            <option value="">All</option>
            @foreach($categories as $c)
                <option value="{{ $c->id }}" {{ request('category_id')==$c->id?'selected':'' }}>
                    {{ $c->name }}
                </option>
            @endforeach
        </select>
    </form>

    <ul class="list-group">
        @foreach($products as $p)
            <li class="list-group-item">
                {{ $p->name }} - {{ $p->price }} ({{ $p->category->name }})
            </li>
        @endforeach
    </ul>
@endsection
