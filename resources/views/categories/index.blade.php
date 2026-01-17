@extends('layouts.app')

@section('content')
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Add Category</a>

    <table class="table">
        @foreach($categories as $c)
            <tr>
                <td>{{ $c->name }}</td>
                <td>
                    <a href="{{ route('categories.edit',$c) }}">Edit</a>
                    <form method="POST" action="{{ route('categories.destroy',$c) }}" style="display:inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
