@extends('layouts.app')

@section('content')
    <div class="container-fluid px-5 py-4">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb bg-light p-3 rounded shadow-sm">
                <li class="breadcrumb-item">
                    <a href="{{ route('categories.index') }}" class="text-decoration-none">
                        <i class="bi bi-house-door"></i> Categories
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    <i class="bi bi-pencil-square"></i> Edit Category
                </li>
            </ol>
        </nav>

        <!-- Form Section -->
        <div class="bg-white p-5 rounded-bottom shadow-sm border">
            <form method="POST" action="{{ route('categories.update', $category) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="form-label fw-bold fs-5">
                        <i class="bi bi-tag-fill text-primary"></i> Category Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text"
                           name="name"
                           id="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $category->name) }}"
                           required
                           autofocus>
                    @error('name')
                    <div class="invalid-feedback">
                        <i class="bi bi-exclamation-circle"></i> {{ $message }}
                    </div>
                    @enderror
                </div>

                <hr class="my-4">

                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-warning shadow">
                        <i class="bi bi-save-fill"></i> Update Category
                    </button>
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Back
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
